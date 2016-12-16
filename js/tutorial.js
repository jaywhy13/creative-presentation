(function(){
    var tutorialHtml = "<div class='tutorial-title'></div><div class='tutorial-description'></div><div class='tutorial-buttons'><button class='tutorial-apply'>Apply</button><a href='javascript:void(0)' class='tutorial-back'>Back</a></div>";

    function Tutorial(steps){
        this.steps = steps;
        this.index = 0;
        this.appliedStyles = [];
    }

    Tutorial.prototype.load = function(index) {
        if(index < this.steps.length){
            var step = this.steps[index];
            console.log("Loading step", index, step);
            this.setTitle(step.title);
            this.setDescription(step.description);
        }
    };

    Tutorial.prototype.setTitle = function(title) {
        console.log("Setting title", title);
        $(".tutorial-title").html(title);
    };

    Tutorial.prototype.setDescription = function(description) {
        $(".tutorial-description").html(description);
    };

    Tutorial.prototype.applyStyles = function() {
        var step = this.steps[this.index];
        var styles = step.styles;
        var previousStyles = {};
        $.each(step.styles, function(selector, selectorStyles){
            previousStyles[selector] = previousStyles[selector] || {};
            $.each(selectorStyles, function(css, val){
                previousStyles[selector][css] = $(selector).css(css);
                $(selector).css(css, val);
            });
        });
        this.appliedStyles.push(previousStyles);
    };

    Tutorial.prototype.unapply = function() {
        var previousStyles = this.appliedStyles.pop();
        console.log("Unapplying styles ... setting back these styles:", previousStyles);
        $.each(previousStyles, function(selector, selectorStyles){
            $.each(selectorStyles, function(css, val){
                $(selector).css(css, val);
            });
        });
    };

    Tutorial.prototype.next = function() {
        if(this.index + 1 < this.steps.length){
            this.index++;
            this.load(this.index);
        }
    };


    Tutorial.prototype.back = function() {
        if(this.index - 1 >= 0){
            this.unapply();
            this.index--;
            this.load(this.index);
        }
    };

    Tutorial.prototype.setupUiControls = function(selector) {
        $(selector).html(tutorialHtml);
        $(selector).find(".tutorial-apply").click(function(){
            tutorial.applyStyles();
            tutorial.next();
        });
        $(selector).find(".tutorial-back").click(function(){
            tutorial.back();
        });
    };


    /**
     * Sets up the tutorial. Also sets up the placeholder in the process
     * @param  {[type]} selector [description]
     * @return {[type]}          [description]
     */
    Tutorial.prototype.start = function(selector) {
        var tutorial = this;
        $(document).ready(function(){
            tutorial.setupUiControls(selector);
            tutorial.load(0);
        });
    };

    window.Tutorial = Tutorial;    
})();
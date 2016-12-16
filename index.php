<!DOCTYPE html5>
<html>
    <head>
        <title>Creative Presentation</title>
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/tutorial.css">
    </head>
    <body>
        <div class="nav">
            <div class="main-menu">
                <a href="#">Services</a>
                <a href="#">Products</a>
                <a href="#">Design</a>
                <a href="#">Tours</a>
            </div>
            <div class="secondary-menu">
                <a href="#">About Us</a>
                <a href="#">Contact Us</a>
            </div>
        </div>
        <div class="login">
            <div class="title">Awesome App</div>
            <div class="fields">
                <div class="form-control">
                    <label for="">Username</label>
                    <input type="text" class="form-field username">
                </div>
                <div class="form-control">
                    <label for="">Password</label>
                    <input type="password" class="form-field password">
                </div>
            </div>
            <div class="buttons">
                <button class="login-button">Login</button>
                <button class="forgot-password">Forgot Password</button>
            </div>
        </div>


        <div class="tutorial">
                        
        </div>

        <script src="/js/jquery-1.11.3.min.js"></script>
        <script src="/js/tutorial.js"></script>
        <script>
            var tutorial = new Tutorial([
                {
                    title: "Space",
                    description: "Let's add some space in and around components",
                    styles: {
                        '.form-field': {
                            'padding': '10px',
                            'margin': '10px',
                        },
                        '.login' : {
                            'padding': '20px'
                        }
                    }
                },
                {
                    title: "Space",
                    description: "Make the labels the same size",
                    styles: {
                        'label': {
                            'width': '16%',
                            'display': 'inline-block',
                            'margin': '10px',
                        }
                    }
                },
                {
                    title: "Spacing",
                    description: "Let's also make the text boxes bigger",
                    styles: {
                        '.form-field': {
                            'width': '70%',
                        }
                    }
                },
                {
                    title: "Contrast",
                    description: "Lets introduce contrast to the title section so it stands out more. Lets make it bigger, center it and put lots of space around the title",
                    styles: {
                        '.title': {
                            'font-size': '25px',
                            'margin': '20px',
                            'text-align': 'center'
                        }
                    }
                },
                {
                    title: "Contrast",
                    description: "Introduce more contrast by color differences in backgrounds",
                    styles: {
                        '.login': {
                            'background-color': '#f9f9f9',
                        },
                        'div.title': {
                            'margin': '-20px -20px 10px',
                            'padding': '40px',
                            'background-color': '#bbb',
                        }

                    }
                },
                {
                    title: "Contrast",
                    description: "Introduce more contrast by color difference in borders for the text fields",
                    styles: {
                        'input.form-field': {
                            'border': '1px solid hsl(0,0%,93%)',
                        }
                    }
                },
                {
                    title: "Contrast",
                    description: "We can de-emphaize the colors and size of the labels",
                    styles: {
                        'label': {
                            'color': 'hsl(0,0%,80%)',
                            'font-size': '12px',
                        }
                    }
                },
                {
                    title: "Contrast",
                    description: "If it's too deemphasized we can balance using font weight or uppercase",
                    styles: {
                        'label': {
                            'text-transform': 'uppercase',
                            'font-weight': 'bold',
                        }
                    }
                },
                {
                    title: "Contrast",
                    description: "Login button could be more prominent. Lets make it bigger, center it and put on a line by itself",
                    styles: {
                        '.login-button': {
                            'padding': '10px',
                            'width': '40%',
                            'display': 'block',
                            'margin': '10px auto',
                        }
                    }
                },
                {
                    title: "Contrast",
                    description: "Lets uppercase it as well, and bold it",
                    styles: {
                        '.login-button': {
                            'font-weight': 'bold',
                            'text-transform': 'uppercase',
                        }
                    }
                },
                {
                    title: "Contrast",
                    description: "Lets change the border, background and color",
                    styles: {
                        '.login-button': {
                            'border': '1px solid hsl(0,0%,93%)',
                            'background-color': '#bbbbbb',
                            'color': 'white',
                        }
                    }
                },
                {
                    title: "Contrast",
                    description: "Lets deemhasize the Forgot Password button, login is more important. Remove the border",
                    styles: {
                        '.forgot-password': {
                            'border': 'transparent',
                            'background': 'none',
                            'display': 'block',
                            'outline': 'none',
                        }
                    }
                },
                {
                    title: "Contrast",
                    description: "Center it too",
                    styles: {
                        '.forgot-password': {
                            'margin': '0 auto',
                        }
                    }
                },
                {
                    title: "Contrast",
                    description: "Also change the color",
                    styles: {
                        '.forgot-password': {
                            'color': 'hsl(0,0%,80%)',
                        }
                    }
                },
                {
                    title: "Fonts",
                    description: "This can give a design a face lift!",
                    styles: {
                        'body': {
                            'font-family': 'Avenir',
                        }
                    }
                },
                {
                    title: "Color",
                    description: "This can give a design a face lift!",
                    styles: {
                        'div.title': {
                            'background-color': 'rgb(0, 192, 193)',
                        }
                    }
                },
                {
                    title: "Anti-contrast",
                    description: "Sometimes decreasing contrast can be interesting. Lets remove the border",
                    styles: {
                        '.login': {
                            'border': 'none',
                        }
                    }
                },
                {
                    title: "Contrast",
                    description: "But deliberate slight differences in color can really help make things stand out",
                    styles: {
                        'body': {
                            'background-color': 'hsl(0,0%,95%)',
                        }
                    }
                },
                {
                    title: "Similarities",
                    description: "Color can be used to make things look similar... like prominence",
                    styles: {
                        '.login-button': {
                            'background-color': 'rgb(0, 192, 193)',
                        }
                    }
                },
                {
                    title: "Contrast",
                    description: "Username and Password are standing out too much, let's loose the bold",
                    styles: {
                        'label': {
                            'font-weight': 'normal',
                        }
                    }
                },
                {
                    title: "Color",
                    description: "White on the green looks better",
                    styles: {
                        'div.title': {
                            'color': 'white',
                        }
                    }
                },
                {
                    title: "Spacing",
                    description: "Letter spacing can also work wonders for the title in making it stand out",
                    styles: {
                        'div.title': {
                            'letter-spacing': '4px',
                        }
                    }
                },
                {
                    title: "Color",
                    description: "When users enter the field, the border color could change and get darker",
                    styles: {
                        '.username': {
                            'border': '1px solid hsl(0,0%,80%)',
                        }
                    }
                },
                {
                    title: "Color",
                    description: "And errors can you use strong red colors",
                    styles: {
                        '.username': {
                            'border': '1px solid rgb(241, 18, 18)',
                        }
                    }
                },
                {
                    title: "Color",
                    description: "The links up the top are a sore to look at. Lets decrease the contrast and uppercase",
                    styles: {
                        '.secondary-menu a': {
                            'color': 'hsla(0,0%,82%,1)',
                            'text-decoration': 'none',
                            'margin': '0px 9px',
                            'text-transform': 'uppercase',
                            'font-size': '10px',
                            'color': 'hsla(0,0%,82%,1)',
                            'text-decoration': 'none',
                            'margin': '0px 9px',
                            'text-transform': 'uppercase',
                            'font-size': '10px',
                            'float': 'right',
                        },
                        '.username': {
                            'border': '1px solid rgb(238, 238, 238)',
                        }
                    }
                },
                {
                    title: "Contrast",
                    description: "Had that been the main menu, we could increase the contrast by changing the background and adjusting the fonts in the menu",
                    styles: {
                        '.secondary-menu' : {
                            'display': 'none'
                        },
                        '.main-menu': {
                            'display': 'block',
                            'margin': '-8px -8px 55px',
                            'padding': '10px 0px 8px 20px',
                            'background-color': 'white',
                        },
                        '.main-menu a': {
                            'color': 'hsla(0,0%,82%,1)',
                            'text-decoration': 'none',
                            'margin': '0px 9px',
                            'text-transform': 'uppercase',
                            'font-size': '10px',
                        },
                        '.nav': {
                            'margin-bottom': '55px',
                        }
                    }
                },
                {
                    title: "Contrast",
                    description: "We can also increase the contrast by increasing the font size and the darkening the color",
                    styles: {
                        '.main-menu a': {
                            'font-size': '13px',
                            'font-weight': 'bold',
                            'color': 'hsl(0,0%,45%)'
                        }

                    }
                }

            ]);
            tutorial.start(".tutorial");
        </script>

    </body>
</html>
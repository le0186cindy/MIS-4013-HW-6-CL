var optionsH4 = {
    strings: ["Typed.js do amazing stuff", "This title types itself!", "Cool typing animation.", "See how it changes everytime!?"],
    typeSpeed: 50,  // Speed of typing (ms)
    backSpeed: 25,  // Speed of backspacing (ms)
    backDelay: 1000,  // Time before starting to backspace (ms)
    startDelay: 500,  // Time before starting typing (ms)
    loop: true,  // Whether to loop the animation
    showCursor: false,  // Whether to show the cursor
};

var typed = new Typed('#typed-showcaseh4', optionsH4);

var paragraph = {
    strings: ["That's pretty much it, but you can add a lot more by integrating with html or other JavaScript functions to make it really cool!"],
    typeSpeed: 50,
    backSpeed: 25,
    backDelay: 1000,
    startDelay: 500,
    loop: false,
    showCursor: false,
};

var typedParagraph = new Typed('#typed-paragraph', paragraph);
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    /***************************/
    /* CODEPEN CSS - NO NEED ***/
    /***************************/
    @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&display=swap');

    :root {
        --ff-sans: 'Nunito Sans', sans-serif;
        --fs-400: 16px;
        --color-text: #000000;
        --color-accent: #000000;
        --color-border: #DDDDDD;
        --gap-700: 48px;
        --gap-400: 16px;
        --gap-300: 12px;
        --gap-200: 8px;
        --transform-arrow-down: rotate(-180deg);
        --trans: all 250ms ease-in-out;
        --br-100: 10px;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    input:focus {
        outline: 0;
    }

    body {
        min-height: 100vh;
        font-family: var(--ff-sans);
        display: flex;
        align-items: center;
        padding: 2rem;
    }


    /***************************/
    /***** CUSTOM SELECT *******/
    /***************************/
    .Tselect {
        --width: 200px;
        --height: 50px;
        --icon-w: 40px;
        position: relative;
        width: var(--width);
        height: var(--height);
        padding-right: var(--icon-w);
        cursor: pointer;
    }

    .Tselect input,
    .Tselect .option {
        display: block;
        font-family: var(--ff-sans);
        font-size: var(--fs-400, 16px);
        color: var(--color-text, #000000);
    }

    .Tselect input::-webkit-input-placeholder {
        color: var(--color-text, #000000);
    }

    .Tselect input:-ms-input-placeholder {
        color: var(--color-text, #000000);
    }

    .Tselect input::placeholder {
        color: var(--color-text, #000000);
    }

    .Tselect input {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        padding: var(--gap-400, 16px);
        padding-right: var(--icon-w);
        color: var(--color-text, #000000);
        text-overflow: ellipsis;
        cursor: pointer;
        border: 1px solid;
        border-color: var(--color-border, #DDDDDD);
        border-radius: var(--br-100, 10px);
    }

    /* -- Select Icon */
    .Tselect .Tselect-icon {
        width: auto;
        height: 100%;
        position: absolute;
        top: 0;
        right: var(--gap-400, 16px);
        display: flex;
        justify-content: center;
        align-items: center;
        transition: var(--trans);
        pointer-events: none;
    }

    .Tselect.open .Tselect-icon {
        transform: var(--transform-arrow-down);
    }

    /* -- Select Options */
    .Tselect .options {
        position: absolute;
        top: 0px;
        left: 0;
        width: 100%;
        max-height: 500px;
        padding-block: var(--gap-500, 24px);
        padding-top: calc(var(--height) + 5px);
        background-color: #FFFFFF;
        border-radius: var(--br-100, 10px);
        border: 1px solid;
        border-color: var(--color-border, #DDDDDD);
        overflow: hidden;
        overflow-y: auto;
        opacity: 0;
        transition: var(--trans);
        pointer-events: none;
    }

    .Tselect.open .options {
        opacity: 1;
        pointer-events: all;
    }

    .Tselect .option {
        padding-block: 5px;
        padding-inline: var(--gap-400, 16px);
    }

    .Tselect .option:hover,
    .Tselect .option:focus {
        background-color: rgba(0, 0, 0, 0.05);
    }

    .Tselect .options {
        z-index: 1;
    }

    .Tselect,
    .Tselect input,
    .Tselect .option,
    .Tselect .Tselect-icon {
        z-index: 2;
    }

    .Tselect .option[value="white"] {
        background-color: #FFFFFF;
    }

    .Tselect .option[value="black"] {
        background-color: #000000;
        color: #FFFFFF;
    }

    .Tselect .option[value="red"] {
        background-color: #FF0000;
        color: #FFFFFF;
    }
    </style>
</head>

<body>
    <!-- Add aria-selected="true" in option to make it default from init -->
    <div class="cp_wrapper">
        <div class="Tselect">
            <input type="hidden" name="selected_option[value]" value="">
            <input type="text" name="selected_option[label]" value="" placeholder="Select.." readonly>
            <div class="options">
                <div class="option" value="white">White</div>
                <div class="option" value="black" aria-selected="true">Black</div>
                <div class="option" value="red">Red</div>
            </div>
            <span class="select-icon">
                <svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M6.05473 5.78032C5.74791 6.07323 5.24964 6.07323 4.94282 5.78032L0.230113 1.28119C-0.0767041 0.988283 -0.076704 0.512595 0.230113 0.219683C0.53693 -0.0732283 1.0352 -0.0732283 1.34202 0.219683L5.5 4.18922L9.65798 0.222027C9.9648 -0.0708847 10.4631 -0.0708847 10.7699 0.222027C11.0767 0.514938 11.0767 0.990627 10.7699 1.28354L6.05718 5.78266L6.05473 5.78032Z"
                        fill="#000000" />
                </svg>
            </span>
        </div>


    </div>
    <script>
    init__select();

    // Select
    function init__select() {
        let selects = document.querySelectorAll('.Tselect');
        let options = document.querySelectorAll('.option');
        let exist_open_select = document.querySelector('.Tselect.open');

        // Open Select with toggle class open
        selects.forEach(select => {
            select.addEventListener('click', e => {
                exist_open_select = document.querySelector('.Tselect.open');

                // If Select Already Contains Open, Remove
                if (e.target.closest('.Tselect').classList.contains('open')) {
                    e.target.closest('.Tselect').classList.remove('open');
                } else {
                    e.target.closest('.Tselect').classList.add('open');
                }

                // [Multiple Selects] Remove Previous Open Selects
                exist_open_select ? exist_open_select.classList.remove('open') : null;
            });
        });


       // INIT: Check if option selected from init
let options_init_selected = document.querySelectorAll('.option[aria-selected="true"]');
if (options_init_selected.length > 0) {
    options_init_selected.forEach(option => {
        let dft_active_value = option.attributes.value.value;
        let dft_active_label = option.innerText;
        let dft_parent = option.closest('.Tselect');
        console.log(dft_active_value, dft_active_label);
        dft_parent.querySelector('input[type=hidden]').setAttribute('value', dft_active_value);
        dft_parent.querySelector('input[type=text]').setAttribute('value', dft_active_label);

        // Set Background Color of Input (with a slight delay)
        setTimeout(() => {
            let bgColor = window.getComputedStyle(option).getPropertyValue('background-color');
            dft_parent.querySelector('input[type=text]').style.backgroundColor = bgColor;
        }, 10); // Adjust the delay time if necessary
    });
}



        // Update Selected Value
        options.forEach(option => {
            option.addEventListener('click', e => {
                e.stopPropagation();
                let this_select = e.target.closest('.Tselect');
                let this_input = this_select.querySelector('input[type="text"]');
                let this_input__hidden = this_select.querySelector('input[type="hidden"]');

                ///////////////////////////////////////////
                //////// Execute These After Click ////////
                ///////////////////////////////////////////
                // Remove Previous Active Option
                let alreadyActiveOption = this_select.querySelector('.option.active');
                alreadyActiveOption ? alreadyActiveOption.classList.remove('active') : null;
                alreadyActiveOption ? alreadyActiveOption.removeAttribute('selected') : null;

                // Add Active Option
                e.target.classList.add('active');
                e.target.setAttribute('aria-selected', true);

                // Update Value
                this_input.setAttribute('value', e.target.innerText);
                this_input__hidden.setAttribute('value', e.target.attributes.value.value);

                // Set Background Color of Input
                let bgColor = window.getComputedStyle(e.target).getPropertyValue('background-color');
                this_input.style.backgroundColor = bgColor;

                console.log(e.target.attributes.value.value, e.target.innerText)

                // Close Select Options
                exist_open_select.classList.remove('open');
            });
        });


        // Close if click outside select
        document.addEventListener('click', e => {
            // Check if exist open select
            exist_open_select = document.querySelector('.Tselect.open');
            if (exist_open_select) {

                // Check if Target is inside select
                let isSelect = exist_open_select.contains(e.target);
                isSelect ? null : exist_open_select.classList.remove('open')
            }
        })
    }
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test Email Template</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            .center {
                width: 100%;
                max-width: 700px;
                margin: 0 auto;
            }
            .form__group {
                position: relative;
                padding: 15px 0 0;
                margin-top: 10px;
                width: 100%;
                margin-bottom: 20px;
            }
            .form__field {
                font-family: inherit;
                width: 100%;
                border: 0;
                border-bottom: 2px solid #9b9b9b;
                outline: 0;
                font-size: 1.3rem;
                color: #d2cfcf;
                padding: 7px 0;
                background: transparent;
                transition: border-color 0.2s;
            }
            .form__field::placeholder {
                color: transparent;
            }
            .form__field:placeholder-shown ~ .form__label {
                font-size: 1.3rem;
                cursor: text;
                top: 20px;
            }
            .form__label {
                position: absolute;
                top: 0;
                display: block;
                transition: 0.2s;
                font-size: 1rem;
                color: #9b9b9b;
            }
            .form__field:focus {
                padding-bottom: 6px;
                border-width: 3px;
                border-image: linear-gradient(to right, #11998e, #38ef7d);
                border-image-slice: 1;
            }
            .form__field:focus ~ .form__label {
                position: absolute;
                top: 0;
                display: block;
                transition: 0.2s;
                font-size: 1rem;
                color: #11998e;
            }
            /* reset input */
            .form__field:required, .form__field:invalid {
                box-shadow: none;
            }
            textarea {
                color: #d2cfcf;
                font-size: 15px;
                width: 100%;
                background: #222F3E;
                outline: none;
                padding: 10px;
            }
            button {
                padding: 10px 30px;
                color: #d2cfcf;
                background: #222F3E;
                font-size: 16px;
            }
            /* demo */
            body {
                font-family: 'Poppins', sans-serif;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                font-size: 1.5rem;
                background-color: #222222;
            }
            .alert-success {
                color: #d2cfcf;
                margin-bottom: 20px;
            }

        </style>
    </head>
    <body>
        <div class="center">
            <form method="POST" action="{{ route('send') }}" enctype="multipart/form-data">
                @csrf
                <div class="form__group field">
                    <input type="email" class="form__field" placeholder="Send Template to ..." name="email" id='email' required />
                    <label for="email" class="form__label">Send Template to ...</label>
                </div>
                <div class="form__group">
                    <textarea placeholder="Your Html Mail Template" rows="15" name="template" required></textarea>
                </div>
                @if(session('messenger'))
                    <div class="alert-success">
                        {{ session('messenger') }}
                    </div>
                @endif
                <button type="submit">Test</button>
            </form>
        </div>
    </body>
</html>

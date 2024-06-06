<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
          content="jigar sable, portfolio, jigar, full stack dev, personal portfolio lifecodes, portfolio design, portfolio website, personal portfolio"/>
    <meta name="description"
          content="Welcome to Jigar's Portfolio. Full-Stack Web Developer and Android App Developer"/>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('home/assets/css/style.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
{{--          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="--}}
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- Favicon -->
    <link id='favicon' rel="shortcut icon" href="{{asset('home/assets/images/favicon.png')}}" type="image/x-png">
    <title>Portfolio | Jigar Sable</title>
    <livewire:styles />

    <style>






        .form-control {
            background: #E5ECFB;
            padding: 3%;
            width: 100%;
            border-radius: 10px;
            margin: 2%;
            box-sizing: border-box;
            border: 1px solid rgb(51, 51, 51)


        }
        .notificationGroup {
            background-color: #fff;
            display: block;
            margin: 10px 0;
            position: relative;
            border: 1px solid #e6e6ea;
            border-radius: 2px;
        }

        .notificationGroup label {
            padding: 12px 15px;
            width: 100%;
            display: block;
            text-align: right;
            cursor: pointer;
            position: relative;
            z-index: 2;
            transition: color 200ms ease-in;
            overflow: hidden;
            font-size: 14px;
            border-radius: 2px;
        }

        .notificationGroup label:before {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            content: '';
            background-color: #5562eb;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%) scale3d(1, 1, 1);
            transition: all 300ms cubic-bezier(0.4, 0, 0.2, 1);
            opacity: 0;
            z-index: -1;

        }

        .notificationGroup label:after {
            width: 28px;
            height: 28px;
            content: '';
            border: 2px solid #d1d7dc;
            background-color: #fff;
            background-image: url("data:image/svg+xml,%3Csvg width='32' height='32' viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5.414 11L4 12.414l5.414 5.414L20.828 6.414 19.414 5l-10 10z' fill='%23fff' fill-rule='nonzero'/%3E%3C/svg%3E ");
            background-repeat: no-repeat;
            background-position: 2px 3px;
            border-radius: 50%;
            z-index: 2;
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            transition: all 200ms ease-in;
        }

        .notificationGroup input:checked ~ label {
            color: #E5ECFB;
        }

        .notificationGroup input:checked ~ label:before {
            transform: translate(-50%, -50%) scale3d(120, 120, 1);
            opacity: 1;
        }

        .notificationGroup input:checked ~ label:after {
            background-color: #54e0c7;
            border-color: #54e0c7;
        }

        .notificationGroup input {
            width: 32px;
            height: 32px;
            order: 1;
            z-index: 2;
            position: absolute;
            left: 3%;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            visibility: hidden;
            border-radius: 3%;
        }
        .selectbox {
            position: relative;
        }

        .selectbox::before {
            content: '';
            position: absolute;
            top: 50%;
            margin-top: -6px;
            right: .7rem;
            width: 0;
            height: 0;
            border: solid black;
            border-width: 0 1px 1px 0;
            display: inline-block;
            padding: 3px;
            transform: rotate(45deg);
        }

        select {
            border: 1px solid #EEE;
            border-radius: .25rem;
            padding: .5rem 1.5rem .5rem .5rem;
            display: flex;
            background-color: white;
            outline: 0;
            cursor: pointer;
            appearance: none;
        }
    </style>

</head>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .loader-container {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 10000;
            background: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            width: 100%;
            transition: top 2s ease-in-out;
        }

        .loader-container.fade-out {
            top: -120%;
        }

        .loader {
            width: 12%;
        }

        .loader img {
            width: 100%;
            height: 100%;
            -webkit-user-drag: none;
        }

        @media screen and (min-width: 200px) and (max-width: 768px) {
        .loader {
            width: 40%;
        }  

        }

        /* @media screen and (max-width: 480px) {
            .loader {
                width: 100%;
            }
        } */
    </style>
</head>
<body>

<!-- Loader starts here -->
<div class="loader-container">
    <div class="loader">
        <img src="./Images/icon.webp" alt="Loading...">
    </div>
</div>
<!-- Loader ends here -->

<!-- Your page content goes here -->

<script>
    function loader() {
        document.querySelector('.loader-container').classList.add('fade-out');
    }

    window.onload = function() {
        loader();
    };
</script>

</body>
</html>

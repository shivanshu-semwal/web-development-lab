<!DOCTYPE html>

<head>
    <title>Document</title>
    <script>
        function valid() {
            var f = document.forms["nos"];
            if (/^\d*$/.test(f['n1'].value) &&
                /^\d*$/.test(f['n2'].value)) {
                console.log('fsdf');
                return true;
            }
            return false;
        }
    </script>
</head>

<body>
    <form name="nos" action="fact.php" method="POST" onsubmit="return valid()">
        No1: <input type="text" name="n1"> <br>
        No2: <input type="text" name="n2"> <br>
        <input type="simage.pngubmit" name="sub"> <br>
    </form>
</body>

</html>
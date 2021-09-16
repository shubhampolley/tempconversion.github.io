<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        img {
            width: 400px;
            height: 400px;
        }

        h1 {
            color: red;
            text-align: center;
            line-height: 20vh;
        }

        .main-div {
            width: 100%;
            height: 80vh;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .right-side {
            width: 400px;
            height: 300px;
            background-color: #dfe6e9;
            border-radius: 15px;
            
            align-items: center;
            position: relative;
            display: flex;
            
            
        }
        .form1{
            position: relative;
            align-items: center;
            left:35%;
        }
        .n1{
            width:250px;
            height: 40px;
            padding: 5px;
            outline:none;
            border-radius: 1px solid grey;
            border-radius: 5px;
            position: relative;
            left:-20%;
        }
        .selection{
            width: 100%;
            margin: 20px 0;
        }
        .btn{
            padding: 10px 16px;
            border-radius: 5px;
            outline: none;
            border: none;
            background-color:#88c0ff ;
            color:white;
            font-size: 0.9rem;
        }
        .cel{
            position: relative;
            left:-10%;
        }
        .cel1{
            position: relative;
            left:-10%;
            top:70%; 
        }
        p{
            position: relative;
            top:40%;
            right: 52%;;
            width: 50%;
            white-space: nowrap;
        
        text-overflow: ellipsis;
        }
    </style>
</head>

<body>
    <header>
        <h1>Temperature Conversion</h1>
        <div class="main-div">
            <div class="left-side">
                <img src="temp.jpg">
            </div>
            <div class="right-side">
                <form class="form1" method="post">
                    <input type="text " name="num" placeholder="enter your number" class="n1">
                    <div class="selection">
                        <label class="cel">Celcius</label>
                        <input type="radio" name="units" value="cel" class="cel1">
                        <label class="far">Farenheit</label>
                        <input type="radio" name="units" value="far">
                    </div>
                    <input type="submit" name="submit" value="convert now" class="btn">
                </form>
                <p>
                    <?php
                    if(isset($_POST['submit'])) // submit kiya hai ya nhi woh dekhega
                    {
                        $num = $_POST['num']; 
                        $temp = $_POST['units'];
                        if($temp == "cel")
                        {
                            $result = $num*(9/5)+32;
                            echo "The conversion value of celsius in farenheit is " 
                            .$result;
                        }
                        else
                        {
                            $result = ($num-32)*(5/9);
                            echo "The conversion value of farenheit in celsius is " 
                            .$result;
                        }
                    }
                    ?>
                </p>
            </div>
        </div>
    </header>
</body>

</html>
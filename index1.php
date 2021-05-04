<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey for you</title>

</head>

<body>
    <style>
        body {
                background-color: aqua;
                font-size: 20px;
            }

            .frm {
                margin-left: 40%;
                margin-right: 40%;
                background: cornsilk;
            }

            input {
                font-weight: bolder;
            }

            .top {
                margin: 0px;
                background: aqua;

            }

            .top h1 {
                margin-left: 40%;
            }

            .top p {
                margin-left: 40%;
            }

        @media(max-width: 769px) {
            body {
                background-color: antiquewhite;
                font-size: 20px;
            }

            .frm {
                margin-left: 10%;
            }

            input {
                font-weight: bolder;
            }

            .top {
                margin: 0px;
                background: aqua;

            }

            .top h1 {
                margin-left: 30%;
            }

            .top p {
                margin-left: 30%;
            }
        }
    </style>
    <div class="top">
        <h1>SURVEY</h1>
        <p>Reward Yourself $$$</p>
    </div>

    <div class="frn">
        <form action="subsurvey.php" class="frm" method="POST">
            <label>1. Full Name</label><br>
            <input type="text" name="name" placeholder="Ex:- Ganesha" /><br>

            <label>2. Phone Number</label><br>
            <input type="tel" name="phone" placeholder="Ex:- 1234567890" /><br>

            <label>3. Email-ID</label><br>
            <input type="email" name="email" placeholder="Ex:- bholaparvati@gmail.com" /><br>

            <label>4. Father's Name</label><br>
            <input type="text" name="FatherName" placeholder="Mr. Bhola" /><br>

            <label>5. Mother's Name</label><br>
            <input type="text" name="Mother" placeholder="Mrs. Parvati" /><br>

            <label style="font-size: 1.4rem;">6. Gender</label><br><br>
            <input type="radio" name="gender" value="Male">Male<br>
            <input type="radio" name="gender" value="female">Female<br>
            <input type="radio" name="gender" value="Other">Other<br><br>

            <label>7. Number of Family Mambers</label><br>
            <input type="number" name="famlyno" placeholder="Ex:- 5" /><br>

            <label>9. City/town</label><br>
            <input type="text" name="city" placeholder="Ex:-Chandni Chawk" /><br>

            <label>10. State & Country</label><br>
            <input type="text" name="State" placeholder="Ex:- UP & INDIA" /><br>
            <input type="checkbox" name="tc" required> I accept all mention <a href="#">T & C</a>.<br><br>
            <input name="submit" type="submit">
        </form>
        
    </div>
</body>

</html>
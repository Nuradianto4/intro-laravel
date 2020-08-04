<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMLaravelJuli2020</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/register/proses" method="POST">
      @csrf
        <div>
            <label for="firstname">First name :</label><br><br>
            <input type="text" name="firstname"><br><br>
            <label for="lastname">Last name :</label><br><br>
            <input type="text" name="lastname"><br><br>
        </div>
        
        <div>
            <label for="">Gender:</label><br><br>
            <input type="radio" name="gender" id="">Male <br>
            <input type="radio" name="gender" id="">Female <br>
            <input type="radio" name="gender" id="">Other <br><br>
        </div>
        <div>
            <label for="">Nationality:</label><br><br>
            <select name="" id="">
                <option value="">Indonesian</option>
                <option value="">Singapuran</option>
                <option value="">Malaysian</option>
                <option value="">Australian</option>
            </select><br><br>
        </div>
        <div>
            <label for="">Language Spoken:</label><br><br>
            <input type="checkbox" name="language" id="">Bahasa Indonesia <br>
            <input type="checkbox" name="language" id="">English <br>
            <input type="checkbox" name="language" id="">Other <br><br>
        </div>
        <div>
            <label for="">Bio:</label><br><br>
            <textarea name="" id="" cols="40" rows="12"></textarea><br>
        </div>
        <button>Sign Up</button>
    </form>
</body>

</html>
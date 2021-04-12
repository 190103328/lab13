<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <title>Laravel File Upload</title>
    <style>
        .container {
            max-width: 500px;
        }
        dl, ol, ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        * {
  margin: 0;
  padding: 0;
  outline: none;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
}

html {
  font-size: 62.5%;
}

        .contact {
  width: 100%;
  height: 100vh;
  background-color: #272727;
  display: flex;
  justify-content: center;
  align-items: center;
}

.contact-wrapper {
  width: 60%;
  height: 75rem;
  display: flex;
  box-shadow: 0 3rem 7rem rgba(0, 0, 0, 0.5);
}

.contact-left {
  width: 35%;
  background: linear-gradient(rgba(15, 15, 15, 0.6), rgba(22, 22, 22, 0.9)),
    url(images/balloons.jpeg) center no-repeat;
  background-size: cover;
}

.contact-right {
  width: 65%;
  background-color: #eee;
  padding: 3rem 10rem 10rem 10rem;
}

.contact-heading {
  font-family: "Baloo Da 2", serif;
  font-size: 6rem;
  font-weight: 300;
  color: #272727;
  margin-bottom: 5rem;
  text-align: center;
}

.contact-right form {
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.input-group {
  position: relative;
}

.field {
  width: 45rem;
  background-color: transparent;
  border: none;
  border-bottom: 0.2rem dashed #636363;
  margin: 3rem 0;
  padding: 1rem 1rem 1rem 0;
  font-family: "Muli", serif;
  font-size: 1.6rem;
  color: #4b4b4b;
}

.input-group input {
  height: 4rem;
}

.input-group textarea {
  max-height: 7rem;
  max-width: 45rem;
}

.field:focus {
  border-bottom-style: solid;
}

.input-group label {
  position: absolute;
  left: 0;
  font-family: "Baloo Da 2", serif;
  font-size: 1.8rem;
  color: #4b4b4b;
  text-transform: uppercase;
  pointer-events: none;
  transition: all 0.3s;
}

.input-label {
  bottom: 3rem;
}

.message {
  bottom: 6rem;
}

.field:focus ~ label {
  transform: translateY(-3rem);
  font-size: 1.2rem;
}

.submit-btn {
  width: 45rem;
  height: 5rem;
  background-color: #53adc9d3;
  color: #fff;
  border: none;
  margin-top: 2rem;
  font-family: "Muli", serif;
  font-size: 2rem;
  font-weight: 300;
  text-transform: uppercase;
  letter-spacing: 0.2rem;
  cursor: pointer;
  text-shadow: 0 0.1rem 0.3rem rgba(0, 0, 0, 0.5);
  box-shadow: 0 0.1rem 0.3rem rgba(0, 0, 0, 0.3);
}
    </style>
</head>

<body>

    <div class="container mt-5">
        <form action="{{route('fileUpload')}}" method="post" enctype="multipart/form-data">
          <h3 class="text-center mb-5">Create order</h3>
            @csrf
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
          @endif

          @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif

            <div class="input-group">
                <input type="text" class="field" placeholder="Full Name" />
                <label class="input-label"></label>
            </div>
            <div class="input-group">
                <input type="text" class="field" placeholder="Phone" />
                <label class="input-label"></label>
            </div>
            <div class="input-group">
                <input type="email" class="field" placeholder="Email"/>
                <label class="input-label"></label>
            </div>
            <div class="input-group">
                <textarea class="field" placeholder="Message"></textarea>
                <label class="message"></label>
            </div>
            <div class="input-group">
                <input type="file" name="file" class="custom-file-input" id="chooseFile">
                <label class="custom-file-label" for="chooseFile">Select file</label>
            </div>
            <input type="submit" class="submit-btn" value="Submit" />
        </form>
    </div>

</body>
</html>
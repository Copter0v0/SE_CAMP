<!DOCTYPE html>
<html>
<head>
    <title>สูตรคูณ Javascript</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/dist/css/adminlte.min.css') }}">
</head>
<body>
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">สูตรคูณ</h3>
        </div>
        <form>
            <div class="form-group">
                <label>Text</label>
                <input type="number" id="num" class="form-control" placeholder="Enter ...">
                <button type="button" class="btn btn-primary" onclick="multiply_table()">Enter</button>
            </div>
        </form>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="text-align: center">Multiplier</th>
              <th style="text-align: center">Result</th>
            </tr>
          </thead>
          <tbody id = result>

          </tbody>
        </table>
      </div>

    <script>
        function multiply_table(){
            Swal.fire({
                title: "Good job!",
                text: "This is your result!",
                icon: "success"
            });
            let my_code_tr = ``;
            var inputNumber = $('#num').val();
            for (let index = 1; index <= 24; index++){
                console.log(inputNumber + " x " + index + " = " + inputNumber*index);
                my_code_tr += `<tr><td>${inputNumber} x ${index} </td><td>${inputNumber * index}</td></tr>`;
            }
            $('#result').html(my_code_tr);
        }
    </script>
</body>
</html>

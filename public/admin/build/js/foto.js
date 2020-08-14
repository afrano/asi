    $().ready(function () {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#gambar').attr('src', e.target.result);
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function () {
            readURL(this);
        });
    })
    
    
        $().ready(function () {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#gambar1').attr('src', e.target.result);
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp1").change(function () {
            readURL(this);
        });
    })
    
    
    $().ready(function () {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#gambar2').attr('src', e.target.result);
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp2").change(function () {
            readURL(this);
        });
    })
    
    $().ready(function () {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#gambar3').attr('src', e.target.result);
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp3").change(function () {
            readURL(this);
        });
    })
    
    $().ready(function () {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#gambar4').attr('src', e.target.result);
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp4").change(function () {
            readURL(this);
        });
    })
    
    $().ready(function () {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#gambar5').attr('src', e.target.result);
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp5").change(function () {
            readURL(this);
        });
    })
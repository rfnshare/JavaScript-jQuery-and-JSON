<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
<form id="target">
    <input type="text" name="one" value="Hello There" style="vertical-align: middle;">
    <img src="spinner.gif" id="spinner" height="25" style="vertical-align: middle; display: none;">
</form>
<div id="result"></div>
<script>
    $('#target').change(function (event) {
        event.preventDefault();
        $('#spinner').show();
        var form = $('#target');
        var txt = form.find('input[name="one"]').val();
        $.post('autoecho.php', {'val': txt},
            function (data) {
                $('#result').empty().append(data);
                $('#spinner').hide();
            }
        ).error(function () {
            console.log('error');
        });
        return false;
    });
</script>
</body>
</html>
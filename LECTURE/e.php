<?php
include('./Admin_nav.php');
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    
    <title></title>
    <style>
     
        #signatureCanvas {
            border: 2px solid #ccc;
        }
    </style>
</head>
<body>

<div class="modal" id="myModal">
<div class="container p-3 my-2 bg-white text-dark" style="width:29.5%">
    <h2>DRAW SIGNATURE</h2>

    <canvas id="signatureCanvas" width="400" height="200"></canvas>
    <br>
    <button onclick="clearSignature()"  class="btn btn-danger m-2">Clear Signature</button>
    <button onclick="saveSignature()" class="btn btn-success m-2">Save Signature</button>

    <form action="save_signature.php" method="post" id="signatureForm">
        <input type="hidden" name="signatureData" id="signatureDataInput">
        <input type="submit" value="Submit Signature" style="display:none;" >
    </form>
    </div>    </div>
    <script>
        const canvas = document.getElementById('signatureCanvas');
        const ctx = canvas.getContext('2d');
        let isDrawing = false;
        let lastX = 0;
        let lastY = 0;

        canvas.addEventListener('mousedown', (e) => {
            isDrawing = true;
            [lastX, lastY] = [e.offsetX, e.offsetY];
        });

        canvas.addEventListener('mousemove', (e) => {
            if (isDrawing) {
                ctx.beginPath();
                ctx.moveTo(lastX, lastY);
                ctx.lineTo(e.offsetX, e.offsetY);
                ctx.stroke();
                [lastX, lastY] = [e.offsetX, e.offsetY];
            }
        });

        canvas.addEventListener('mouseup', () => {
            isDrawing = false;
        });

        function clearSignature() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
        }

        function saveSignature() {
            const signatureData = canvas.toDataURL('image/png');
            document.getElementById('signatureDataInput').value = signatureData;

            // Submit the form to the server
            document.getElementById('signatureForm').submit();
        }
    </script>
</body>
</html>


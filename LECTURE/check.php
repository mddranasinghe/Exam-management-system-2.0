<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        button {
            background-color: transparent;
            border: none;
            cursor: pointer;
        }
        .selected-red {
            background-color: red;
        }
        .selected-yellow {
            background-color: yellow;
        }
    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
            <th>Column 3</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1, Col 1</td>
            <td>Row 1, Col 2</td>
            <td>Row 1, Col 3</td>
            <td>
                <button class="check-button">Check (Red)</button>
                <button class="mark-button">Mark (Yellow)</button>
            </td>
        </tr>
        <tr>
            <td>Row 2, Col 1</td>
            <td>Row 2, Col 2</td>
            <td>Row 2, Col 3</td>
            <td>
                <button class="check-button">Check (Red)</button>
                <button class="mark-button">Mark (Yellow)</button>
            </td>
        </tr>
        <!-- Add more rows as needed -->
    </tbody>
</table>

<script>
    const checkButtons = document.querySelectorAll('.check-button');
    const markButtons = document.querySelectorAll('.mark-button');

    checkButtons.forEach(button => {
        button.addEventListener('click', function() {
            const row = this.parentElement.parentElement;
            row.classList.toggle('selected-red');
        });
    });

    markButtons.forEach(button => {
        button.addEventListener('click', function() {
            const row = this.parentElement.parentElement;
            row.classList.toggle('selected-yellow');
        });
    });
</script>
</body>
</html>

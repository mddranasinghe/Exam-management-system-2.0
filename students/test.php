<!DOCTYPE html>
<html>
<head>
    <title>exam entry page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<section>
    <div class="wrapper">
        <section class="sec">
            <div style="float: center; width: 1200px; height: 100%; background-color: #white; margin-left: 30px; margin-top: 0px;">
                <div class="box1">
                    <div class="box1">
                        <img src="n.png" style="float: center;">
                    </div>

                    <h3 style="text-align: center; text-transform: uppercase; margin: 2px; margin-left: 50px;">University of Vavuniya, Sri Lanka</h3>
                    <h4 style="text-align: center; margin: 2px;"><u>Examination Entry Form For Proper Candidates</u></h4>
                    <h4 style="text-align: center; margin: 2px;">(to be completed and returned to the deputy registrar, examination and student admission)</h4>

                    <div class="mb-3">
                        <div class="form-group row">
                            <form name="Registration">
                                <div class="login">
                                    <!-- Your form inputs and content here -->

                                    <div id="printContent"> <!-- Add a unique ID to the container div -->
                                        <!-- Your content that you want to print goes here -->

                                        </table>

                                    </div>

                                </div>
                            </form>
                            <body>
                                <!-- Your HTML and other PHP code here... -->

                                <p style="margin-left:790px">
                                    <a href="admin_examEnteyPage.php" class="btn btn-danger m-2">GO BACK</a>
                                    <button id="printButton" class="btn btn-success m-2">Print Page</button>
                                </p>
                            </body>
                        </div>
                    </div>
                    <script>
                        // Function to apply print styles and initiate print
                        function initiatePrint() {
                            const style = `
                                @page {
                                    size: A4;
                                    margin: 0;
                                }
                                html, body {
                                    width: 210mm;
                                    height: 397mm;
                                    margin: 0;
                                    padding: 0;
                                }
                            `;

                            const head = document.head || document.getElementsByTagName('head')[0];
                            const styleElement = document.createElement('style');
                            styleElement.type = 'text/css';
                            styleElement.appendChild(document.createTextNode(style));
                            head.appendChild(styleElement);

                            setTimeout(() => {
                                // Print only the content inside the "printContent" div
                                const printContent = document.getElementById('printContent');
                                const printWindow = window.open('', '_blank');
                                printWindow.document.write(printContent.innerHTML);
                                printWindow.document.close();
                                printWindow.focus();
                                printWindow.print();
                                printWindow.close();

                                head.removeChild(styleElement);
                            }, 2000);
                        }

                        // Attach event listener to the print button
                        const printButton = document.getElementById('printButton');
                        printButton.addEventListener('click', initiatePrint);
                    </script>
                </div>
            </div>
        </section>
    </div>
</section>
</body>
</html>

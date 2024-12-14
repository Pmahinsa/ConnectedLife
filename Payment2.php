<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Payment Form</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <style>

            body {
                background: 
                    url("images/Hd-Laptop-wallpapers.jpg"); 
                background-size: cover; 
                padding-top: 50px;
                font-family: Arial, sans-serif;
            }


            .container {
                max-width: 400px;
                margin: 50px auto;
                padding: 20px;
                background-color: #ccffcc;
                border-radius: 5px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
                position: relative;
                
            }

            h1 {
                text-align: center;
                margin-top: 0;
            }
            h2{
                color: green;
                text-align: center;
            }

            .form-group {
                margin-bottom: 20px;
            }

            label {
                display: block;
                margin-bottom: 5px;
            }

            #card-errors {
                color: red;
                margin-top: 10px;
                font-size: 14px;
            }

           
        </style>
    </head>
    <body>
        <div class="container">
    <h2>Add Payment Details</h2>
    <form class="registration-form" action="PaymentSave.php" method="POST">
         <div class="form-group">
             <label for="paymentid">Payment ID:</label>
             <input type="text" class="form-control" id="paymentid" name="paymentid" required>
        </div>
        <div class="form-group"> 
            <label for="date">Date:</label>
            <input type="text" class="form-control" id="date" name="date" required>
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <input type="text" class="form-control" id="type" name="type" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" class="form-control" id="description" name="description" required>
        </div>
        <div class="form-group">
            <label for="amount">Amount:</label>
            <input type="text" class="form-control" id="amount" name="amount" required>
        </div>     
        <div class="form-group">
            <label for="customerid">Customer ID:</label>
            <input type="customerid" class="form-control" id="customerid" name="customerid" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Add</button>
    </form>
</div>

        <div class="container">
            <h2>Add Credit Card</h2>
            <form action="paymentwithcart.php" method="POST" id="payment-form">
                <div class="form-group">
                    <label for="card-element">Credit or debit card</label>
                    <div id="card-element" class="form-control"></div>
                    <div id="card-errors" class="form-text"></div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Pay Now</button>
                </div>
            </form>
            <div class="modal fade" id="paymentSuccessModal" tabindex="-1" aria-labelledby="paymentSuccessModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="paymentSuccessModalLabel">Payment Successful</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Your payment was successful. Thank you for your purchase!
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://js.stripe.com/v3/"></script>
        <script>





            const stripePublishableKey = 'YOUR_STRIPE_PUBLISHABLE_KEY';
            const stripe = Stripe(stripePublishableKey);
            const elements = stripe.elements();
            const cardElement = elements.create('card');
            cardElement.mount('#card-element');







            



            fetch('get_payments.php')
                    .then(response => response.json())
                    .then(data => {
                        const paymentDetailsContainer = document.getElementById('payment-details');

                        data.forEach(payment => {
                            const paymentInfo = document.createElement('div');
                            paymentInfo.classList.add('payment-info');
                            paymentInfo.innerHTML = `
                <p>Payment ID: ${payment.payment_id}</p>
                <p>Date: ${payment.date}</p>
                <p>Type: ${payment.type}</p>
                <p>Description: ${payment.description}</p>
                <p>Amount: LKR ${payment.amount}</p>
                <p>Customer ID: ${payment.customer_id}</p>
                <p>Distributor ID: ${payment.distributor_id}</p>
                    <p>Distributor TP: ${payment.distributor_tp}</p>
                <hr>
            `;
                            paymentDetailsContainer.appendChild(paymentInfo);
                        });
                    })
                    .catch(error => {
                        console.error('Error fetching payment details:', error);
                    });


            document.getElementById("payment-form").addEventListener("submit", async (event) => {
                event.preventDefault();
                const {token, error} = await stripe.createToken(cardElement);

                if (error) {
                   
                    const errorElement = document.getElementById("card-errors");
                    errorElement.textContent = error.message;
                } else {
                    
                    fetch("process_payment.php", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                        },
                        body: JSON.stringify({
                            stripeToken: token.id,
                            cardHolderName: document.getElementById("card-holder-name").value,
                           
                        }),
                    })
                            .then(response => response.json())
                            .then(data => {
                                
                                if (data.success) {
                                    
                                    $('#paymentSuccessModal').modal('show');
                                } else {
                                    
                                    const errorElement = document.getElementById("card-errors");
                                    errorElement.textContent = data.message;
                                }
                            })
                            .catch(error => {
                                console.error("Error processing payment:", error);
                            });
                }
            });


        </script>
    </body>
</html>

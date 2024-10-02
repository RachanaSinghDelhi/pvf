<!-- Razorpay Checkout Script -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<!-- Add "Donate Now" button -->
<button id="rzp-button1">Donate Now</button>

<script>
var options = {
    "key": "YOUR_KEY_ID", // Razorpay Key ID
    "amount": "10000", // Amount to be donated in paise (10000 paise = INR 100)
    "currency": "INR",
    "name": "Your Organization Name",
    "description": "Donate to Support Us",
    "image": "https://yourwebsite.com/logo.png", // Your organization's logo URL
    "order_id": "<?php echo $orderId; ?>", // Order ID generated from the backend
    "handler": function (response){
        // Handle successful donation
        alert("Thank you for your donation! Payment ID: " + response.razorpay_payment_id);
        
        // Optionally, send the payment response to your backend for verification
        window.location.href = "verify_donation.php?payment_id=" + response.razorpay_payment_id + "&order_id=" + response.razorpay_order_id + "&signature=" + response.razorpay_signature;
    },
    "prefill": {
        "name": "John Doe", // Optionally prefill the donor's name
        "email": "john.doe@example.com", // Optionally prefill the donor's email
        "contact": "9876543210" // Optionally prefill the donor's contact number
    },
    "notes": {
        "cause": "Donation for education"
    },
    "theme": {
        "color": "#F37254"
    }
};

var rzp1 = new Razorpay(options);
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>

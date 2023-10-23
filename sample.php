

<script>
    // use this script every where to you want to log page

    try {
        mixpanel.identify();        // you can your own user_id of customer or use sample device name of mixpanel
        mixpanel.track("PAGE NAME");
    } catch (error) {
        console.log(error);
        console.error('An error occurred:', error);
    }

    //for log clicked of btn
    $("#paypalBtn").click(function(){
        mixpanel.track("Pay With Paypal");
    });
    $("#cartCheckout").click(function(){
        mixpanel.track("Proceed To Checkout");
    });

    $("#applePayButton").click(function(){
        mixpanel.track("Pay With Apple Pay");
    });

</script>
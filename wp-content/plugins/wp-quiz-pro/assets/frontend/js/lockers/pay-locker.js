"use strict";!function(t,o){if(window.stripeHandler){var r=window.stripeHandler;t(document).ready(function(){t(document).on("wp_quiz_stripe_token",function(e,n){return window.recentStripeToken=n}),t(document).on("click",".wq-js-pay-button",function(e){e.preventDefault();var n=t(e.currentTarget);r.open({amount:parseFloat(n.attr("data-amount")),name:o.stripeName,closed:function(){void 0!==window.recentStripeToken&&(n.closest(".wq-pay-locker").remove(),delete window.recentStripeToken)}})}),window.addEventListener("popstate",function(){return r.close()})})}}(jQuery,wpQuiz);
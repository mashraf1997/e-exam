"use strict";!function(r,a){a(document).ready(function(){a(document).on("click",".wq-quiz-listquiz .wq-question-vote-btn:not(.is-voted)",function(t){t.preventDefault();var e=a(this),n=e.closest(".wq-quiz").attr("data-quiz-id"),o=e.hasClass("wq-question-vote-up-btn")?"vote-up":"vote-down",i=r.restUrl+"wp-quiz/v2/quizzes/"+n+"/"+o,u=r.helpers.getRequest({url:i,method:"POST",data:{question_id:e.closest(".wq-question").attr("data-id")}});u.done(function(t){e.find(".number").text(t.number),e.find(".text").text(t.text),e.addClass("is-voted"),e.parent().find("button").prop("disabled",!0)}),u.fail(function(t){console.error(t)})}),a(document).on("click",".wq-quiz-listquiz .wq-embed-toggle-btn",function(t){t.preventDefault(),a(this).parent().toggleClass("active").next().slideToggle("fast")}),a(document).on("click",".wq-share-fb",function(t){if("undefined"!=typeof FB){t.preventDefault();var e=t.currentTarget.dataset.url;FB.ui({method:"share",href:e},function(t){console.log(t)})}}),a(document).on("click",".wq-share-tw",function(t){t.preventDefault();var e=t.currentTarget.dataset.url;window.open("https://twitter.com/intent/tweet?url="+encodeURIComponent(e),"_blank","width=500, height=300")}),a(document).on("click",".wq-share-vk",function(t){t.preventDefault();var e=t.currentTarget.dataset.url;window.open("http://vk.com/share.php?url="+encodeURIComponent(e),"_blank","width=500, height=300")})})}(wpQuiz,jQuery);
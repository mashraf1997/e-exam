"use strict";!function(n,e){n(document).ready(function(){if(n(".wq-force-action-fb-share").length){n(document).on("click.forceFBShare",".wq_forceShareFB",function(e){return function(e){if(e.preventDefault(),"undefined"!=typeof FB){var t=n(e.currentTarget).closest(".wq-quiz"),r=e.currentTarget.dataset.url;if(e.currentTarget.dataset.trackingId){var i=e.currentTarget.dataset.trackingId;r=-1===r.indexOf("?")?r+"?wqtid="+i:r+"&wqtid="+i}else if(e.currentTarget.dataset.imageFile){var a=e.currentTarget.dataset.imageFile;r=-1===r.indexOf("?")?r+"?wqimg="+a:r+"&wqimg="+a}FB.ui({method:"share",href:r},function(e){void 0!==e&&t.trigger("wp_quiz_complete_force_action")})}}(e)})}})}(jQuery,wpQuiz);
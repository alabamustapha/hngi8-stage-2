

const resumeTabs = document.querySelectorAll("#resume-tab li");
const resumeContents = document.querySelectorAll(".resume-content");
const closeDiscussion = document.getElementById("close-discussion");
const openDiscussion = document.getElementById("open-discussion");
const discussion = document.querySelector(".discussion");

closeDiscussion.addEventListener('click', function(btn){
    btn.preventDefault()
    discussion.classList.add('hidden');
})
openDiscussion.addEventListener('click', function(btn){
    btn.preventDefault()
    discussion.classList.remove('hidden');
})

resumeTabs.forEach(function(tab){
    tab.addEventListener('click', function(el){
        removeActiveTabs();
        el.target.classList.add('active');
        console.log(el.target.id)
        showContent(el.target.id)
    });
});

window.addEventListener("load", function() {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const code = urlParams.get('code')
    if(code){
        showDiscussionMessage(code);
    }
    
}, false); 

function showDiscussionMessage(code){
        if(code == "1"){
            alert("Do normal!, we don't understand you");
        }else if(code == "0"){
            alert("You tried to reach us, we got you :-)");
        }else if(code == "sweet"){
            alert("Got your message, I hope I like you enough to reply :-)");
        }else{
            alert("Na wa for you ooo!")
        }
}

function removeActiveTabs(){
    resumeTabs.forEach(tab => tab.classList.remove('active'))
}

function showContent(tabId){
    resumeContents.forEach(content => content.classList.add('hidden'))
    let content = document.querySelector(`#${tabId}-content`);
    content.classList.remove('hidden')
    content.classList.add('active')
}
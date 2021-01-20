const paragraphs = document.querySelectorAll("p.truncate");
const modalBody = document.querySelector("div.modal-body");
const buttons = document.querySelectorAll("button.text-primary.read-more");
const oldTexts = Array();

let count = 0
paragraphs.forEach(el => {
    oldTexts.push(el.innerText);
    let newText = truncateString(el.innerText, 200);
    modalBody.innerText = el.innerText;
    el.innerHTML = newText;
    el.id = count;
    count = count + 1;
});

document.querySelectorAll("button.text-primary.read-more").forEach(el => {
    el.addEventListener("click", function () {
        console.log(el.parentElement.id);
        modalBody.innerText = oldTexts[el.parentElement.id];
    });
});

function truncateString(str, num) {
    if (str.length <= num) {
        return str
    }
    return str.slice(0, num) + '<button type="button" class="text-primary read-more" data-toggle="modal" data-target="#readMoreModal"> Read More</button> ...'
}

truncateString("A-tisket a-tasket A green and yellow basket", 8);
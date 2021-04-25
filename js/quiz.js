var main_Section = document.getElementById("section1");

var bg1 = document.createElement("div");
bg1.className = "bg1";
main_Section.appendChild(bg1);

var bg2 = document.createElement("div");
bg2.className = "bg2";
bg1.appendChild(bg2);

var form = document.createElement("form");
form.setAttribute("id", "form")

bg2.appendChild(form)

var title = document.createElement("p");
title.className = "title_2";
form.appendChild(title)

var form_check = document.createElement("div");
form_check.className = "form-check";
form.appendChild(form_check)

var input_element = document.createElement("input");
input_element.className = "form-check-input radio_btn_input";
input_element.setAttribute('type', 'radio');
input_element.setAttribute('name', 'flexRadioDefault');
input_element.setAttribute('id', 'flexRadioDefault2');

form_check.appendChild(input_element);

var label_element = document.createElement("label");
label_element.className = "form-check-label radio_btn";
input_element.setAttribute('for', 'flexRadioDefault');

form_check.appendChild(label_element);

var btn = document.createElement("div");
btn.className = "btn_bg";
form.appendChild(btn);

var btn_Texte = document.createElement("div");
btn_Texte.className = "btn_txt";
btn_Texte.setAttribute('id', 'btn_txt')
btn.appendChild(btn_Texte);

function form_template(numb, question, options) {

  form.innerHTML = `
              <form id="form" name="form">

              <p class="title_2">${question}</p>
              <input type="hidden" id="custId" name="fid" value="${numb}">

             <div class="form-check">
                 <input class="form-check-input radio_btn_input" type="radio" name="fradio" id="flexRadioDefault1" value="a">
                 <label class="form-check-label radio_btn" for="flexRadioDefault1">
                    ${options[0]}
                 </label>
               </div>
               <div class="form-check">
                 <input class="form-check-input radio_btn_input" type="radio" name="fradio" id="flexRadioDefault2" value="b">
                 <label class="form-check-label radio_btn" for="flexRadioDefault2">
                    ${options[1]}
                 </label>
               </div> 

               <div class="form-check">
                 <input class="form-check-input radio_btn_input" type="radio" name="fradio" id="flexRadioDefault2" value="c">
                 <label class="form-check-label radio_btn" for="flexRadioDefault2">
                    ${options[2]}
                 </label>
               </div> 
             
               <div class="form-check">
                 <input class="form-check-input radio_btn_input" type="radio" name="fradio" id="flexRadioDefault2" value="d">
                 <label class="form-check-label radio_btn" for="flexRadioDefault2">
                   ${options[3]}
                 </label>
               </div> 
             
               <div class="btn_bg">
                   <input class="btn_txt" id="btn_txt" type="submit" placeholder="Continue" onclick="next(event)">
               </div>

             </form>`

}
let count = 0;


function next(event) {
  count++;

  event.preventDefault(event);
  $.ajax({
    url: "quizzData.php",
    method: "post",
    data: $('form').serialize(),
    success: function (res) {
      console.log(res)
    }
  })

  if (count <= 12) {
    var questions = fetch("../js/quiz_question.json").then(response => response.json())

    questions.then((data) => {
      form_template(data[count].numb, data[count].question, data[count].options)
    })
  }
  if (count > 12) {
    window.location.href = "profile.php";
  }
}

var questions = fetch("../js/quiz_question.json").then(response => response.json())

questions.then((data) => {
  form_template(data[count].numb, data[count].question, data[count].options)
})
var main_Section = document.getElementById("section1");

function form_template(numb,question,options){

    var bg1 = document.createElement("div");
      bg1.className="bg1";
         main_Section.appendChild(bg1);

        var bg2 = document.createElement("div");
        bg2.className="bg2";
          bg1.appendChild(bg2);

  var form = document.createElement("form");
    form.setAttribute("id","form")

    bg2.appendChild(form)

    var title = document.createElement("p");
      title.className="title_2";
        form.appendChild(title)

    var form_check = document.createElement("div");
      form_check.className="form-check";
      form.appendChild(form_check)

      var input_element= document.createElement("input");
        input_element.className="form-check-input radio_btn_input";
          input_element.setAttribute('type', 'radio');
          input_element.setAttribute('name', 'flexRadioDefault');
          input_element.setAttribute('id', 'flexRadioDefault2');

          form_check.appendChild(input_element);

          var label_element= document.createElement("label");
            label_element.className="form-check-label radio_btn";
             input_element.setAttribute('for', 'flexRadioDefault');

            form_check.appendChild(label_element);

          var btn = document.createElement("div");
            btn.className="btn_bg";
              form.appendChild(btn);

              var btn_Texte = document.createElement("div");
              btn_Texte.className="btn_txt";
                btn.appendChild(btn_Texte);

            form.innerHTML = `
              <form id="form">

              <p class="title_2">${question}</p>

             <div class="form-check">
                 <input class="form-check-input radio_btn_input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                 <label class="form-check-label radio_btn" for="flexRadioDefault1">
                    ${options[0]}
                 </label>
               </div>
               <div class="form-check">
                 <input class="form-check-input radio_btn_input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                 <label class="form-check-label radio_btn" for="flexRadioDefault2">
                    ${options[1]}
                 </label>
               </div> 

               <div class="form-check">
                 <input class="form-check-input radio_btn_input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                 <label class="form-check-label radio_btn" for="flexRadioDefault2">
                    ${options}
                 </label>
               </div> 
             
               <div class="form-check">
                 <input class="form-check-input radio_btn_input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                 <label class="form-check-label radio_btn" for="flexRadioDefault2">
                   ${options}
                 </label>
               </div> 
             
               <div class="btn_bg">
                   <div class="btn_txt">Continue</div>
               </div>

             </form>`
          
   }

var questions = fetch("../js/quiz_question.json").then( response => response.json() )

questions.then(data => 
    data.forEach(txt => {

        var quiz = form_template(txt.numb,txt.question, txt.options);
          form.appendChild(quiz)
                 
    })
)
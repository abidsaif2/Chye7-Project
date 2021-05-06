var main_Section = document.querySelector(".back2");

var form = document.createElement("form");
form.setAttribute("id","form")

main_Section.appendChild(form)

function form_template(numb,question,options){

            form.innerHTML = `
            <form id="form" action="quizData.php" method="POST">

            <div class="back3">
                <p class="text">
                    ${question}
                </p>
            </div>
                             
            <label class="checkbox">
                <input type="checkbox" value="a" id="quiz_input" class="checkbox" name="quiz_input">
                <span class="rounded">
                    <span class="txtt">
                          ${options[0]}
                     </span>
                </span>
            </label>

            <label class="checkbox">
                <input type="checkbox" value="b" id="quiz_input" class="checkbox" name="quiz_input">
                <span class="rounded">
                    <span class="txtt">
                          ${options[1]}
                     </span>
                </span>
            </label>

            <label class="checkbox">
                <input type="checkbox" value="c" id="quiz_input" class="checkbox" name="quiz_input">
                <span class="rounded">
                    <span class="txtt">
                          ${options[2]}
                     </span>
                </span>
            </label>

            <label class="checkbox">
                <input type="checkbox" value="d" id="quiz_input" class="checkbox" name="quiz_input">
                <span class="rounded">
                    <span class="txtt">
                          ${options[3]}
                     </span>
                </span>
            </label>

            <div class="btn_sub">
                <button class="btn_txt" id="btn_txt" type="submit" onclick="next(event)">NEXT QUESTION</button>
            </div>

        </form>
        
        <script type="text/javascript">
            $('.txtt').click(function() {
                $(this).siblings('input:checkbox').prop('checked' , false);
            });
        </script>

        `
          
   }

  let count =0;

   function next(event){
          count++   

          event.preventDefault(event)

          var questions = fetch("../js/quiz_question.json").then( response => response.json() )

          questions.then((data) => {
            form_template(data[count].numb, data[count].question, data[count].options)
          })
     }  

var questions = fetch("../js/quiz_question.json").then( response => response.json() )

questions.then((data) => {
  form_template(data[count].numb, data[count].question, data[count].options)
})
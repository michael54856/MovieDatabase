<script src="jquery-3.6.0.min.js"></script>
    <script>
      $(document).ready(function () {
        var oldtext = ["電影",
          "演員",
          "導演",
          "工作室",
          "評論",
          "Casting",
          "獎項"
        ];
        var newtext = ["Movie","Actor", "Director", "Studio", "Comment","Casting","Award"];

        for (i = 0; i < $(".main").length; i++) {
          $(".sub").slideUp(0); //not sure

          $(".main:eq(" + i + ")").mouseover({ id: i }, function (e) {
            n = e.data.id;
            $(".main:eq(" + n + ")").text(newtext[n]);
            $(".sub:eq(" + n + ")").slideToggle();
            $(".sub:not(:eq(" + n + "))").slideUp();
          });

          $(".main:eq(" + i + ")").mouseout({ id: i }, function (e) {
            n = e.data.id;
            $(".main:eq(" + n + ")").text(oldtext[n]);
          });

          //for test
          $(".main:eq("+i+")").click(function(e){
              //window.location.href = "index.html";
              //window.location.href = "PersonnelChangeQuery.php"
          })

          $("#first").click(function(){
            window.location.href = "movieFind_First.php";
          })
          $("#second").click(function(){
            window.location.href = "actorFind_First.php";
          })
          $("#third").click(function(){
            window.location.href = "directorFind_First.php";
          })
          $("#fourth").click(function(){
            window.location.href = "studioFind_First.php";
          })
          $("#fifth").click(function(){
            window.location.href = "commentFind_First.php";
          })
          $("#sixth").click(function(){
            window.location.href = "castingFind_First.php";
          })
          $("#seventh").click(function(){
            window.location.href = "awardFind_First.php";
          })

          $("#firstSub li").click(function(){
            if(this.id == 1){
              window.location.href = "movieFind_First.php";
            }
            if(this.id == 2){
              window.location.href = "movieInsert_First.php";
            }
          })

          $("#secondSub li").click(function(){
            if(this.id == 1){
              window.location.href = "actorFind_First.php";
            }
            if(this.id == 2){
              window.location.href = "actorInsert_First.php";
            }
          })

          $("#thirdSub li").click(function(){
            if(this.id == 1){
              window.location.href = "directorFind_First.php";
            }
            if(this.id == 2){
              window.location.href = "directorInsert_First.php";
            }
          })

          $("#fourthSub li").click(function(){
            if(this.id == 1){
              window.location.href = "studioFind_First.php";
            }
            if(this.id == 2){
              window.location.href = "studioInsert_First.php";
            }
          })

          $("#fifthSub li").click(function(){
            if(this.id == 1){
              window.location.href = "commentFind_First.php";
            }
            if(this.id == 2){
              window.location.href = "commentInsert_First.php";
            }
          })

          $("#sixthSub li").click(function(){
            if(this.id == 1){
              window.location.href = "castingFind_First.php";
            }
            if(this.id == 2){
              window.location.href = "castingInsert_First.php";
            }
          })

          $("#seventhSub li").click(function(){
            if(this.id == 1){
              window.location.href = "awardFind_First.php";
            }
            if(this.id == 2){
              window.location.href = "awardInsert_First.php";
            }
          })

          

        }

        $("#close").click(function(){
          $(".sub").slideUp(0);
        })
      });

      
    </script>
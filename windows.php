<?php  session_start();  include "doctype.php"  ?>

<div class="container">
  <h1 class="text-center" >Калькулятор расчета окон</h1>  <br> 
  <div class="row">
    <div class="col-sm-8">           


      <svg width="100%" height="100%" viewBox="0 0 400 300" id="canva" class="svg"> </svg>


    </div>
    <div class="col-sm-4">
      <div class="svg">

        <div class="input-group input-group-md">
          <span class="input-group-addon myspan">Высота в см</span>
          <input id="height" type="number" value="150" class="form-control" name="msg" placeholder="в см.">
        </div>

        <div class="input-group input-group-md">
          <span class="input-group-addon myspan">Ширина в см</span>
          <input id="width" type="number" value="150" class="form-control" name="msg" placeholder="в см.">
        </div>  

        <div class="input-group input-group-md">
          <span class="input-group-addon myspan">Количество створок</span>
          <input id="countsub" type="number" value="2" class="form-control" name="msg" placeholder="шт.">
        </div>  

        <div class="input-group input-group-md">
          <span class="input-group-addon myspan">Нахлест створок</span>
          <input id="lapping" type="number" value="3" class="form-control" name="msg" placeholder="в см.">
        </div> 

        <div class="input-group input-group-md">
          <span class="input-group-addon myspan">Ширина профиля в см</span>
          <input id="batten" type="number" value="7" class="form-control" name="msg" placeholder="в см.">
        </div>  

        <div class="input-group input-group-md">
          <span id="log" class="input-group-addon myspan">Настройки створок</span>                
        </div> 

        <div id="setting">

          <div class="setting">

            <div class="input-group">
              <span class="input-group-addon number">           
                1
              </span>
              <span class="input-group-addon">           
                Ширина
              </span>
              <input type="number" class="form-control">          
            </div>

            <div class="input-group">
              <span class="input-group-addon">
                Створка             
              </span>

              <select class="form-control">
                <option value="0">Нет</option>
                <option value="1">Влево</option>
                <option value="2">Вправо</option>
                <option value="3">Влево+Откидной</option>
                <option value="4">Вправо+Откидной</option>              
              </select>

            </div>

          </div>

        </div>

        <div class="input-group input-group-md" id="buttoncount">
          <button type="button" class="btn btn-default">1</button>
        </div>

        <button  id="button" class="btn btn-primary btn-md"> DO IT!   </button>

      </div>

    </div>
  </div>
</div><!-- /.container -->



<?php include "foot.php" ?>

<script src="script.js"></script>




</body></html>
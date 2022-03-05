<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Child Factors</a></li>
  <li><a data-toggle="tab" href="#menu1">Kesho Kenya Remarks</a></li>
  <li><a data-toggle="tab" href="#menu2">Vetting Committee Remarks</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <p>
    <?= $this->render("factors", ['model'=>$model,
            'form_name'=>"Eligibility Form", 'model_name'=>"Eligibility"]); ?>
    </p>
  </div>
  <div id="menu1" class="tab-pane fade">
  <?= $this->render("kesho-remarks", ['model'=>$model,
      'form_name'=>"Eligibility Form", 'model_name'=>"Eligibility"]); ?>
  </div>
  <div id="menu2" class="tab-pane fade">
  <?= $this->render("vetting-remarks", ['model'=>$model,
            'form_name'=>"Eligibility Form", 'model_name'=>"Eligibility"]); ?>
  </div>
</div>
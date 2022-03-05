<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#family">Status of family</a></li>
  <li><a data-toggle="tab" href="#wellbeing">Child Wellbeing</a></li>
  <li><a data-toggle="tab" href="#education">Education</a></li>
  <li><a data-toggle="tab" href="#psyco">Psychology</a></li>
  <li><a data-toggle="tab" href="#safety">Safety</a></li>
  <li><a data-toggle="tab" href="#community">Community</a></li>
  <li><a data-toggle="tab" href="#caregiver">Caregiver</a></li>
</ul>

<div class="tab-content">
  <div id="bio" class="tab-pane fade in active">
    <p>
    <?= $this->render("bio", ['model'=>$model,
            'form_name'=>"Child Biographical Information", 'model_name'=>"Child"]); ?>
    </p>
  </div>
  <div id="education" class="tab-pane fade">
  <?= $this->render("education", ['model'=>$model,
      'form_name'=>"Child Education Status", 'model_name'=>"Child"]); ?>
  </div>
  <div id="health" class="tab-pane fade">
  <?= $this->render("health", ['model'=>$model,
            'form_name'=>"Health and Nutrition", 'model_name'=>"Child"]); ?>
  </div>

  <div id="family" class="tab-pane fade">
  <?= $this->render("family", ['model'=>$model,
            'form_name'=>"Family Details", 'model_name'=>"Child"]); ?>
  </div>

  <div id="economy" class="tab-pane fade">
  <?= $this->render("economy", ['model'=>$model,
            'form_name'=>"Family Economic Status", 'model_name'=>"Child"]); ?>
  </div>

  <div id="case" class="tab-pane fade">
  <?= $this->render("case", ['model'=>$model,
            'form_name'=>"Case Detail", 'model_name'=>"Child"]); ?>
  </div>

  <div id="other" class="tab-pane fade">
  <?= $this->render("other", ['model'=>$model,
            'form_name'=>"Other Details", 'model_name'=>"Child"]); ?>
  </div>
</div>
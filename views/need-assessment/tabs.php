<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#family_status">Family Status</a></li>
  <li><a data-toggle="tab" href="#other_sibling">Siblings</a></li>
  <li><a data-toggle="tab" href="#health">Health</a></li>
  <li><a data-toggle="tab" href="#education">Education</a></li>

  <li><a data-toggle="tab" href="#emotional">Emotional</a></li>
  <li><a data-toggle="tab" href="#safety">Safety</a></li>
  <li><a data-toggle="tab" href="#community">Community</a></li>
  <li><a data-toggle="tab" href="#caregiver">Caregiver</a></li>
  <li><a data-toggle="tab" href="#actions">Actions</a></li>
  <li><a data-toggle="tab" href="#bio">Biography</a></li>
  <li><a data-toggle="tab" href="#environment">Environment</a></li>
  <li><a data-toggle="tab" href="#school">School</a></li>
  <li><a data-toggle="tab" href="#economy">Economy</a></li>
  <li><a data-toggle="tab" href="#perspective">Perspective</a></li>
  <li><a data-toggle="tab" href="#support">Support</a></li>
</ul>

<div class="tab-content">
  <div id="family_status" class="tab-pane fade in active">
    <p>
    <?= $this->render("family_status", ['model'=>$model,
            'form_name'=>"Family Status", 'model_name'=>"NeedAssessment"]); ?>
    </p>
  </div>
  <div id="other_sibling" class="tab-pane fade">
  <?= $this->render("other_sibling", ['model'=>$model,
      'form_name'=>"Other Siblings", 'model_name'=>"NeedAssessment"]); ?>
  </div>
  <div id="health" class="tab-pane fade">
  <?= $this->render("health", ['model'=>$model,
            'form_name'=>"Health and Development", 'model_name'=>"NeedAssessment"]); ?>
  </div>

  <div id="education" class="tab-pane fade">
  <?= $this->render("education", ['model'=>$model,
            'form_name'=>"Education", 'model_name'=>"NeedAssessment"]); ?>
  </div>

  <div id="emotional" class="tab-pane fade">
  <?= $this->render("emotional", ['model'=>$model,
            'form_name'=>"Emotional", 'model_name'=>"NeedAssessment"]); ?>
  </div>

  <div id="safety" class="tab-pane fade">
  <?= $this->render("safety", ['model'=>$model,
            'form_name'=>"Safety", 'model_name'=>"NeedAssessment"]); ?>
  </div>

  <div id="community" class="tab-pane fade">
  <?= $this->render("community", ['model'=>$model,
            'form_name'=>"Community", 'model_name'=>"NeedAssessment"]); ?>
  </div>
  <div id="caregiver" class="tab-pane fade">
  <?= $this->render("caregiver", ['model'=>$model,
            'form_name'=>"Caregiver", 'model_name'=>"NeedAssessment"]); ?>
  </div>
  <div id="actions" class="tab-pane fade">
  <?= $this->render("actions", ['model'=>$model,
            'form_name'=>"Actions", 'model_name'=>"NeedAssessment"]); ?>
  </div>
  <div id="bio" class="tab-pane fade">
  <?= $this->render("bio", ['model'=>$model,
            'form_name'=>"Biography", 'model_name'=>"NeedAssessment"]); ?>
  </div>
  <div id="environment" class="tab-pane fade">
  <?= $this->render("environment", ['model'=>$model,
            'form_name'=>"Environment", 'model_name'=>"NeedAssessment"]); ?>
  </div>
  <div id="school" class="tab-pane fade">
  <?= $this->render("school", ['model'=>$model,
            'form_name'=>"School", 'model_name'=>"NeedAssessment"]); ?>
  </div>
  <div id="economy" class="tab-pane fade">
  <?= $this->render("economy", ['model'=>$model,
            'form_name'=>"Economy", 'model_name'=>"NeedAssessment"]); ?>
  </div>
  <div id="perspective" class="tab-pane fade">
  <?= $this->render("perspective", ['model'=>$model,
            'form_name'=>"Perspective", 'model_name'=>"NeedAssessment"]); ?>
  </div>
  <div id="support" class="tab-pane fade">
  <?= $this->render("support", ['model'=>$model,
            'form_name'=>"Support", 'model_name'=>"NeedAssessment"]); ?>
  </div>


  
</div>
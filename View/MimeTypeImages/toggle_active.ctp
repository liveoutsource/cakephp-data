<?php echo $this->Html->link($this->Format->yesNo($ajaxToggle['MimeTypeImage']['active'],'Active','Inactive',1), array('action'=>'toggleActive', $ajaxToggle['MimeTypeImage']['id']), array('escape'=>false));?>
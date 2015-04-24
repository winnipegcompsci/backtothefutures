<?php 

echo $this->Flash->success('This was successfull');
echo $this->Flash->danger('This was dangerous');

echo $this->Html->icon('pencil');
echo $this->Html->glIcon('pencil'); // Glyphicon icons are still available with BootstrapHtmlHelper::glIcon
echo $this->Html->faIcon('pencil'); // FontAwesome are always available using BootstrapHtmlHelper::faIcon

echo $this->Html->label('My Label', 'primary') ;
echo $this->Html->label('My Label', 'danger') ;
echo $this->Html->label('My Label', 'success') ;

echo $this->Html->badge('1') ;
echo $this->Html->badge('2') ;
echo $this->Html->badge('3') ;

echo $this->Html->alert('This is a warning alert!') ;
echo $this->Html->alert('This is a success alert!', 'success');
echo $this->Html->alert('This is a danger alert!', 'danger');

echo $this->Html->alert('This is a info alert with a specific id!', [
    'id' => 'alert-info',
    'type' => 'info'
]);

echo $this->Form->create();
echo $this->Form->input('username', ['type' => 'text']) ;
echo $this->Form->input('password', ['type' => 'password']) ;
echo $this->Form->input('remember', ['type' => 'checkbox']) ;
echo $this->Form->submit('Log In') ;
echo $this->Form->end() ;

echo $this->Form->create(null, ['horizontal' => true]);
echo $this->Form->input('username', ['type' => 'text']) ;
echo $this->Form->input('password', ['type' => 'password']) ;
echo $this->Form->input('remember', ['type' => 'checkbox']) ;
echo $this->Form->submit('Log In') ;
echo $this->Form->end() ;


echo $this->Form->create(null, [
    'horizontal' => true,
    'cols' => [ 
        'sm' => [
            'label' => 4,
            'input' => 4,
            'error' => 4
        ],
        'md' => [
            'label' => 2,
            'input' => 6,
            'error' => 4
        ]
    ]
]);

echo $this->Form->input('username', ['type' => 'text']) ;
echo $this->Form->input('password', ['type' => 'password']) ;
echo $this->Form->input('remember', ['type' => 'checkbox']) ;
echo $this->Form->submit('Log In') ;
echo $this->Form->end() ;

 $content = "<p>My body... !</p>";
echo $this->Modal->create(['id' => 'MyModal2']) ;
echo $this->Modal->header('Example 2 - No HTML', ['close' => false]) ; 
echo $this->Modal->body($content, ['class' => 'my-body-class']) ;
echo $this->Modal->footer([
    $this->Form->button('Submit', ['bootstrap-type' => 'primary']),   
    $this->Form->button('Close', ['data-dismiss' => 'modal']) 
]) ;
echo $this->Modal->end() ;
use
Plenty\Modules\Catalog\Services\UI\Assignments\Assignments;

[
    'fieldId' => 'firstName',
    'fieldType' => 'string',
    'type' => SingersMapping::KEY,
    'key' => 'firstName',
    'label' => 'First Name',
    'settings' => ['value', 'lang'],
    'customSettings' => pluginApp(Assignments::class)->add(
      pluginApp(MyLanguageAssignment::class)//<-- import class
    )
]

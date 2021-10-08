use Plenty\Modules\Catalog\Services\UI\Assignments\Assignments;

[
    'fieldId' => 'firstName',
    'fieldType' => 'string',
    'type' => SingersMapping::KEY,
    'key' => 'firstName',
    'label' => 'First Name',
    'settings' => ['value', 'lang', 'gender'], <-- register it here
    'customSettings' => pluginApp(Assignments::class)->add(
        pluginApp(GenderAssignments::class) //<-- import class
    )
]

class LanguageAssignment extends BaseAssignment
{

    protected $key = 'language-example';
    protected $defaultValue = 'en';
    protected $type = self::TYPE_SELECT;
    protected $visible = true; // defaults to true in base
    protected $required = false; // defaults to false in base

    /**
     * @inheritDoc
     */
    public function getLabel(): string
    {
        return 'Language'; // In a real example, you would use the translated label like below.
        // return trans('catalog::assignments/language.label');
    }

    /**
     * @inheritDoc
     */
    public function getValues(): UIValuesContract
    {
        $values = pluginApp(Values::class);

        $values
            ->add( pluginApp(SelectValue::class)->setCaption('English')->setValue('en') )
            ->add( pluginApp(SelectValue::class)->setCaption('German')->setValue('de') )
            ->add( pluginApp(SelectValue::class)->setCaption('Romanian')->setValue('ro') );

        return $values;
    }
}

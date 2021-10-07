...
use Plenty\Modules\Catalog\Services\UI\Assignments\Assignments;
...
/**
 * @return Assignments
 */
public function getAssignments(): Assignments
{
      $container = pluginApp(Assignments::class)

      $container->add(pluginApp(GenderAssignment::class));

      return $container;
}

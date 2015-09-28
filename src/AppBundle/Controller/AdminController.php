<?php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use JavierEguiluz\Bundle\EasyAdminBundle\Controller\AdminController as EasyAdminController;
use AppBundle\Entity\CoursesTeachers;
use AppBundle\Entity\CoursesUniversities;
class AdminController extends EasyAdminController
{ 
    public function indexAction(Request $request)
    {	
        return parent::indexAction($request);
    }
    protected function createTeachersNewForm($entity, array $entityProperties)
    {
		$editForm = parent::createEditForm($entity, $entityProperties);
        if ($entity instanceof CoursesTeachers) {
            $repository = $this->getDoctrine()->getRepository('AppBundle:CoursesUniversities');
            $products = $repository->findAll();
            $editForm->remove('university_id');
            $editForm->add('universityId', 'entity', array('class' => 'AppBundle:CoursesUniversities','choices' => $products));
        }
        return $editForm;
	}
	
	protected function prePersistTeachersEntity($entity)
	{
		$entity->setUniversityId($entity->getUniversityId()->getId());
		$entity->getFile()->move($entity->getUploadRootDir(),$entity->getFile()->getClientOriginalName());
		$entity->setImage($entity->getFile()->getClientOriginalName());
		$entity->setFile(null);
		return $entity;
	}
	
	protected function prePersistUniversitiesEntity($entity)
	{
		$entity->getFile()->move($entity->getUploadRootDir(),$entity->getFile()->getClientOriginalName());
		$entity->setLogo($entity->getFile()->getClientOriginalName());
		$entity->setFileUniversities(null);
		return $entity;
	}
    private function updateSlug($entity)
    {
        $slug = $this->get('app.slugger')->slugify($entity->getTitle());
        $entity->setSlug($slug);

        return $entity;
    }
}

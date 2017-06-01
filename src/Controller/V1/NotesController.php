<?php
namespace App\Controller\V1;

use Cake\Event\Event;
/**
 * Notes Controller
 *
 * @property \App\Model\Table\NotesTable $Notes
 *
 * @method \App\Model\Entity\Note[] paginate($object = null, array $settings = [])
 */
class NotesController extends AppController
{
    public $paginate = [
        'page' => 1,
        'limit' => 10,
        'maxLimit' => 100
    ];



    public function index()
    {
        $this->Crud->on('beforePaginate', function(Event $event) {
            $this->paginate['limit']=100;
        });
        return $this->Crud->execute();
    }



    function deleteNote($id){
        if(!empty($id)){
            $entity = $this->Notes->get($id);
            if(!empty($entity->toArray())){
                $result = $this->Notes->delete($entity);
                if($result){
                    $this->set([
                        'success' => true,
                        'data' =>  $entity->toArray(),
                        '_serialize' => ['success', 'data']
                    ]);
                }else{
                    $this->set([
                        'success' => false,
                        'data' =>  $entity->toArray(),
                        '_serialize' => ['success', 'data']
                    ]);
                }

            }else{
                $this->set([
                    'success' => false,
                    'data' =>  ['message'=>'Notes not found'],
                    '_serialize' => ['success', 'data']
                ]);
            }
        }
    }

    public function create()
    {
        if ($this->request->is('post')) {

            if(isset($this->request->data['id'])){
                $notes = $this->Notes->get($this->request->data['id']);
                unset($this->request->data['id']);
                $notes = $this->Notes->patchEntity($notes, $this->request->data);
                if ($this->Notes->save($notes)) {
                    $this->set([
                        'success' => true,
                        'data' =>  $notes->toArray(),
                        '_serialize' => ['success', 'data']
                    ]);
                } else {
                    $this->set([
                        'success' => false,
                        'data' =>  $notes->toArray(),
                        '_serialize' => ['success', 'data']
                    ]);
                }
            }else{
                $notes = $this->Notes->newEntity();
                $notes = $this->Notes->patchEntity($notes, $this->request->data);
                if ($this->Notes->save($notes)) {
                    $this->set([
                        'success' => true,
                        'data' =>  $notes->toArray(),
                        '_serialize' => ['success', 'data']
                    ]);
                } else {
                    $this->set([
                        'success' => false,
                        'data' =>  $notes->toArray(),
                        '_serialize' => ['success', 'data']
                    ]);
                }

            }
        }
    }
}

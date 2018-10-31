<?php 
namespace App\Notification\Provider;


class NotificationProvider extends \Bono\Provider\Provider {

 public function initialize(){
    $app = $this->app;
    
    $app->get('/notification/fetch' , function() use($app){

    });


 }


 public function getCriteria()
    {
        $gets = $this->request->get();

        if (empty($this->routeData)) {
            $criteria = array();
        } else {
            $criteria = $this->routeData;
        }

        foreach ($gets as $key => $value) {
            if ($key[0] !== '!') {
                $criteria[$key] = $value;
            }
        }

        $criteria = array_merge($criteria,$this->getOr());

        return $criteria;
    }

    /**
     * Get **or** criteria of current request.
     *
     * @return array
     */
    public function getOr()
    {
        $or = array();
        
        
        if($this->request->get('!or')){
            foreach ($this->request->get('!or') as $key => $value) {
                if(is_array($value)){
                    foreach($value as $k => $v){
                        $or[] = array($key => $v);
                    }
                }else{
                    $or[] = array($key => $value);    
                }
                
            }

            $or = array("!or" => $or);
        }

        return $or;
    }

    /**
     * Get **sort** command of current request.
     *
     * @return array
     */
    public function getSort()
    {
        $sorts = $get = $this->request->get('!sort') ?: array();

        foreach ($sorts as $key => &$value) {
            $value = (int) $value;
        }

        return $sorts;
    }

    /**
     * Get **skip** command of current request.
     *
     * @return array
     */
    public function getSkip()
    {
        $skip = $this->request->get('!skip') ?: null;

        return $skip;
    }

    /**
     * Get **limit** command of current request.
     *
     * @return array
     */
    public function getLimit()
    {
        $limit = $this->request->get('!limit');

        if (is_null($limit) && !is_null($this->collection->option('limit'))) {
            $limit = $this->collection->option('limit');
        }

        return $limit;
    }


 

} 
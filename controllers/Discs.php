<?php




class Discs extends AbstractController{

    /**
     * affichage de la liste des disques
     */
    public function index(){
        $discs = $this->loadModel('Disc');
        $disclist= $discs->getAll();
        $this->render('index',[
            'discs'=>$disclist
        ]);
    }


    public function discDetail($id){
        $discs = $this->LoadModel('Disc');
        $discDetail =$discs->GetDiscByArtist($id);
        $this->render('detail',[
            'discDetail'=>$discDetail
        ]);
    }
}
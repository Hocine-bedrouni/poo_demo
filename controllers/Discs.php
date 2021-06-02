<?php




class Discs extends AbstractController{




    public function discDetail($id){
        $discs = $this->LoadModel('Disc');
        $discDetail =$discs->GetDiscByArtist($id);
        $this->render('detail',[
            'discDetail'=>$discDetail
        ]);
    }


    public function modif($id){
        $discs = $this->LoadModel('Disc');
        $discDetail =$discs->GetDiscByArtist($id);
        $this->render('modif',[
            'disc'=>$discDetail
        ]);
    }

    public function ajout($id){
        $discs = $this->LoadModel('Disc');
        $discDetail =$discs->GetDiscByArtist($id);
        $this->render('ajout',[
            'disc'=>$discDetail
        ]);
    }

    /**
     * affichage de la liste des disques
     */
    public function liste(){
        $discs = $this->LoadModel('Disc');
        $discDetail =$discs->info_record();
        $this->render('liste',[
            'discs'=>$discDetail
        ]);
    }

    /**
     * @param $id
     */
    public function modif_disc($id){
        $artists = $this->LoadModel('Artist');
        $artistDetail =$artists->info_artist();
        $discs = $this->LoadModel('Disc');
        $discDetail =$discs->GetDiscByArtist($id);
        $this->render('modif',[
            'artist'=>$artistDetail,
            'disc'=>$discDetail
        ]);
    }
}

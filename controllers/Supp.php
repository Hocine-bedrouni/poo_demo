<?php


class Supp
{
    public function supp()
    {
        $this->render('supp');
    }

    public function liste(){
        $discs = $this->LoadModel('Disc');
        $discDetail =$discs->info_record();
        $this->render('liste',[
            'discs'=>$discDetail
        ]);
    }

}


<?php


class Discs extends AbstractController
{


    public function discDetail($id)
    {
        $discs = $this->LoadModel('Disc');
        $discDetail = $discs->GetDiscByArtist($id);
        $this->render('detail', [
            'discDetail' => $discDetail
        ]);
    }


    /**
     * affichage de la liste des disques
     */
    public function liste()
    {
        $discs = $this->LoadModel('Disc');
        $discDetail = $discs->info_record();
        $this->render('liste', [
            'discs' => $discDetail
        ]);
    }

    /**
     * @param $id
     */
    public function modiffier($id)
    {
        $modif = false;
        if (isset($_POST['modifier'])) {
            $artists = $this->LoadModel('Artist');
            $artistDetail = $artists->info_artist();
            $discs = $this->LoadModel('Disc');
            $discDetail = $discs->GetDiscByArtist($id);
            $modif = $discs->update($id);
            $this->render('modif', [
                'artist' => $artistDetail,
                'disc' => $discDetail
            ]);

            if ($modif === false) {
                var_dump($modif);
                $this->render('modif', [
                    'artist' => $artistDetail,
                    'disc' => $discDetail
                ]);
                die;
            }
        } elseif (!isset($_POST['modifier'])) {
            $artists = $this->LoadModel('Artist');
            $artistDetail = $artists->info_artist();
            $discs = $this->LoadModel('Disc');
            $discDetail = $discs->GetDiscByArtist($id);
            $this->render('modif', [
                'artist' => $artistDetail,
                'disc' => $discDetail
            ]);
        }
    }

    public function erase($id)
    {
        $supp_disc = $this->LoadModel('Disc');
        $supprime = $supp_disc->delete($id);
        $discDetail = $supp_disc->info_record();
header('location: /discs/liste');
    }


    public function add()
    {
        $ajoute = $this->LoadModel('Disc');
        $ajout_disq= $ajoute->create();
        $discDetail = $ajoute->info_record();
        $artists = $this->LoadModel('Artist');
        $artistDetail = $artists->info_artist();
        $this->render('ajout', [
            'artist' => $artistDetail
        ]);
//        header('location: /disc/liste');


    }


}

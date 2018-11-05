<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         04/11/2018
 * Time:         16:01
 */

namespace FatturaElettronicaXml\Body;


class DatiBeniServizi
{
    /**
     * @var  DettaglioLinea[]
     */
    private $DettaglioLinee;

    /**
     * @var string|null
     */
    private $AliquotaIVA;

    /**
     * @var string|null
     */
    private $Natura;

    /**
     * @var string|null
     */
    private $SpeseAccessorie;

    /**
     * @var string|null
     */
    private $Arrotondamento;

    /**
     * @var string|null
     */
    private $ImponibileImporto;

    /**
     * @var string|null
     */
    private $Imposta;
    /**
     * @var string|null
     */
    private $EsigibilitaIVA;
    /**
     * @var string|null
     */
    private $RiferimentoNormativo;

    /**
     * @return DettaglioLinea[]
     */
    public function getDettaglioLinee(): array
    {
        return $this->DettaglioLinee;
    }

    /**
     * @param DettaglioLinea[] $DettaglioLinee
     */
    public function setDettaglioLinee(array $DettaglioLinee): void
    {
        $this->DettaglioLinee = $DettaglioLinee;
    }

    public function addDettaglioLinea(DettaglioLinea $dettaglioLinea){
        $this->DettaglioLinee[] = $dettaglioLinea;
    }

    /**
     * @return null|string
     */
    public function getAliquotaIVA(): ?string
    {
        return $this->AliquotaIVA;
    }

    /**
     * @param null|string $AliquotaIVA
     */
    public function setAliquotaIVA(?string $AliquotaIVA): void
    {
        $this->AliquotaIVA = $AliquotaIVA;
    }

    /**
     * @return null|string
     */
    public function getNatura(): ?string
    {
        return $this->Natura;
    }

    /**
     * @param null|string $Natura
     */
    public function setNatura(?string $Natura): void
    {
        $this->Natura = $Natura;
    }

    /**
     * @return null|string
     */
    public function getSpeseAccessorie(): ?string
    {
        return $this->SpeseAccessorie;
    }

    /**
     * @param null|string $SpeseAccessorie
     */
    public function setSpeseAccessorie(?string $SpeseAccessorie): void
    {
        $this->SpeseAccessorie = $SpeseAccessorie;
    }

    /**
     * @return null|string
     */
    public function getArrotondamento(): ?string
    {
        return $this->Arrotondamento;
    }

    /**
     * @param null|string $Arrotondamento
     */
    public function setArrotondamento(?string $Arrotondamento): void
    {
        $this->Arrotondamento = $Arrotondamento;
    }

    /**
     * @return null|string
     */
    public function getImponibileImporto(): ?string
    {
        return $this->ImponibileImporto;
    }

    /**
     * @param null|string $ImponibileImporto
     */
    public function setImponibileImporto(?string $ImponibileImporto): void
    {
        $this->ImponibileImporto = $ImponibileImporto;
    }

    /**
     * @return null|string
     */
    public function getImposta(): ?string
    {
        return $this->Imposta;
    }

    /**
     * @param null|string $Imposta
     */
    public function setImposta(?string $Imposta): void
    {
        $this->Imposta = $Imposta;
    }

    /**
     * @return null|string
     */
    public function getEsigibilitaIVA(): ?string
    {
        return $this->EsigibilitaIVA;
    }

    /**
     * @param null|string $EsigibilitaIVA
     */
    public function setEsigibilitaIVA(?string $EsigibilitaIVA): void
    {
        $this->EsigibilitaIVA = $EsigibilitaIVA;
    }

    /**
     * @return null|string
     */
    public function getRiferimentoNormativo(): ?string
    {
        return $this->RiferimentoNormativo;
    }

    /**
     * @param null|string $RiferimentoNormativo
     */
    public function setRiferimentoNormativo(?string $RiferimentoNormativo): void
    {
        $this->RiferimentoNormativo = $RiferimentoNormativo;
    }



    /**
     * @return array
     */
    public function toArray()
    {
        $array = [
            'DettaglioLinee'=>null,
            'DatiRiepilogo'=>[
                'AliquotaIVA'=>null,
                'Natura'=>null,
                'SpeseAccessorie'=>null,
                'Arrotondamento'=>null,
                'ImponibileImporto'=>null,
                'Imposta'=>null,
                'EsigibilitaIVA'=>null,
                'RiferimentoNormativo'=>null,
            ]
        ];

        if(empty($this->getDettaglioLinee())){

        }elseif(count($this->getDettaglioLinee()) === 1){
            $array['DettaglioLinee'] = $this->getDettaglioLinee()[0]->toArray();
        }else{
            $a = [];
            foreach ($this->getDettaglioLinee() as $dettaglioLinea) {
                $a[] = $dettaglioLinea->toArray();
            }
            $array['DettaglioLinee'] = $a;
        }

        if($this->getAliquotaIVA()===null){
            $array['DatiRiepilogo']['AliquotaIVA'] = '0.0';
        }else{
            $array['DatiRiepilogo']['AliquotaIVA'] = $this->getAliquotaIVA();
        }

        if(!empty($this->getNatura())){
            $array['DatiRiepilogo']['Natura'] = $this->getNatura();
        }
        if(!empty($this->getSpeseAccessorie())){
            $array['DatiRiepilogo']['SpeseAccessorie'] = $this->getSpeseAccessorie();
        }
        if(!empty($this->getArrotondamento())){
            $array['DatiRiepilogo']['Arrotondamento'] = $this->getArrotondamento();
        }
        if(!empty($this->getImponibileImporto())){
            $array['DatiRiepilogo']['ImponibileImporto'] = $this->getImponibileImporto();
        }
        if(!empty($this->getImposta())){
            $array['DatiRiepilogo']['Imposta'] = $this->getImposta();
        }
        if(!empty($this->getEsigibilitaIVA())){
            $array['DatiRiepilogo']['EsigibilitaIVA'] = $this->getEsigibilitaIVA();
        }
        if(!empty($this->getRiferimentoNormativo())){
            $array['DatiRiepilogo']['RiferimentoNormativo'] = $this->getRiferimentoNormativo();
        }


        $array['DatiRiepilogo'] = array_filter($array['DatiRiepilogo']);
        return array_filter($array);
    }

}
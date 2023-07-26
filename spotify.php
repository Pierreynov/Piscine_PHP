<?php
class Song
{
    private string $artist;
    private string $title;
    private string $duration;
    public function __construct(string $artist,string $title,string $duration ){
        $this->artist=$artist;
        $this->title=$title;
        $this->duration=$duration;
    }
    public function getArtist() : string
    {
        return $this->artist;
    }
    public function getTitle() : string
    {
        return $this->title;
    }
    public function getDuration() : string
    {
        return $this->duration;
    }
    public function setArtist(string $artist)
    {
        $this->artist=$artist;
    }
    public function setTitle(string $title)
    {
        $this->title=$title;
    }
    public function setDuration(string $duration)
    {
        $this->duration = $duration;
    }
}
class Playlist
{
    private array $songs = array();
    private int $totalMedias = 0;
    public function addMedia(Song $song)
    {
        array_push($this->songs,$song);
        $this->totalMedias = $this->totalMedias + 1;
    }
    public function __toString() : string
    {
        $result = "Songs added: ".$this->totalMedias."\n";
        $sum_time = 0;
        foreach ($this->songs as $key => $song) {
            $time = explode(":",$song->getDuration());
            $sum_time = $sum_time + intval($time[0])*60 + intval($time[1]);
        }
        $result = $result."Playlist length: ".intdiv($sum_time,3600)."h ";
        $sum_time = $sum_time%3600;
        $result = $result.intdiv($sum_time,60)."m ";
        $sum_time = $sum_time%60;
        $result = $result.($sum_time)."s";
        return $result;
    }
}
class App 
{
    private array $content;
    public function start(){
        $playlist = new Playlist();
        foreach($this->content as $key => $element){
            $song_element = explode(";",trim($element,"\n"));
            $song=new Song($song_element[0],$song_element[1],$song_element[2]);
            $playlist->addMedia($song);
        }
        echo $playlist;
    }
    public function setContent(array $array)
    {
        $this->content=$array;
    }
    public function write(string $string){}
    private function readLine(bool $asArray = false): array|bool|string
    {
        ob_start();
        echo implode("", $this->getContent());
        $data = ob_get_contents();
        if ($asArray) {
            $data = explode("\n", ob_get_contents());
        }
        ob_clean();
        return $data;
    }
}
?>
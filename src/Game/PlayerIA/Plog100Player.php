<?php

namespace Hackathon\PlayerIA;
use Hackathon\Game\Result;

class Plog100Player extends Player
{
  protected $myside;
  protected $opponentSide;
  protected $result;
  
  public fonction getChoice()
  {
    if ($this->result->getNbRound() == 1)
    {
      return parent::paperChoice();
    }
    if ($this->result->getNbRound() == 2)
    {
      return parent::rockChoice();
    }
    if ($this->result->getNbRound() == 3)
    {
      return parent::scissorsChoice();
    }
    if ($this->result->getNbRound() == 4)
    {
      return parent::scissorsChoice();
    }
    if ($this->result->getNbRound() == 5)
    {
      return parent::rockChoice();
    }
    if ($this->result->getNbRound() == 6)
    {
      return parent::scissorsChoice();
    }
    if ($this->result->getNbRound() == 7)
    {
      return parent::paperChoice();
    }
    if ($this->result->getNbRound() == 8)
    {
      return parent::scissorsChoice();
    }
    if ($this->result->getNbRound() == 9)
    {
      return parent::rockChoice();
    }
    if ($this->result->getNbRound() == 10)
    {
      return parent::paperChoice();
    }
    else
    {
      return parent::rockChoice();
    }
 }
};

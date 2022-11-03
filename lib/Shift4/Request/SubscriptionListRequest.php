<?php
namespace Shift4\Request;

class SubscriptionListRequest extends AbstractRequest
{

    public function getCustomerId()
    {
        return $this->get('customerId');
    }

    public function customerId($customerId)
    {
        return $this->set('customerId', $customerId);
    }

    public function getLimit()
    {
        return $this->get('limit');
    }

    public function limit($limit)
    {
        return $this->set('limit', $limit);
    }

    public function getStartingAfterId()
    {
        return $this->get('startingAfterId');
    }

    public function startingAfterId($startingAfterId)
    {
        return $this->set('startingAfterId', $startingAfterId);
    }

    public function getEndingBeforeId()
    {
        return $this->get('endingBeforeId');
    }

    public function endingBeforeId($endingBeforeId)
    {
        return $this->set('endingBeforeId', $endingBeforeId);
    }

    public function getIncludeTotalCount()
    {
        return $this->get('includeTotalCount');
    }

    public function includeTotalCount($includeTotalCount)
    {
        return $this->set('includeTotalCount', $includeTotalCount);
    }

    /**
     * @return \Shift4\Request\CreatedFilter
     */
    public function getCreated()
    {
        return $this->getObject('created', '\Shift4\Request\CreatedFilter');
    }

    public function created($created)
    {
        return $this->set('created', $created);
    }

    public function getDeleted()
    {
        return $this->get('deleted');
    }

    public function deleted($deleted)
    {
        return $this->set('deleted', $deleted);
    }
}
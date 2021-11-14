<div>
    <div>
        <x-fields.checkbox
            :name="$this->fieldName('successes.1')" label="Death Save Success 1"
        />
        <x-fields.checkbox
            :name="$this->fieldName('successes.2')" label="Death Save Success 2"
        />
        <x-fields.checkbox
            :name="$this->fieldName('successes.3')" label="Death Save Success 3"
        />
    </div>

    <div>
        <x-fields.checkbox
            :name="$this->fieldName('failures.1')" label="Death Save Failure 1"
        />
        <x-fields.checkbox
            :name="$this->fieldName('failures.2')" label="Death Save Failure 2"
        />
        <x-fields.checkbox
            :name="$this->fieldName('failures.3')" label="Death Save Failure 3"
        />
    </div>
</div>

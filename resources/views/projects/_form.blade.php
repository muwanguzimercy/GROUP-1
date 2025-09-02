<div class="form-section" style="display: flex; flex-wrap: wrap; gap: 24px;">
    <div style="flex:1 1 320px; min-width:280px;">
        <label for="title" style="font-weight:500;">Title</label>
        <input type="text" name="title" id="title" value="{{ old('title', $project->title ?? '') }}" class="border rounded p-2 w-full" required>
    </div>
    <div style="flex:1 1 220px; min-width:180px;">
        <label for="program_id" style="font-weight:500;">Program</label>
        <select name="program_id" id="program_id" class="border rounded p-2 w-full" required>
            <option value="">-- Select Program --</option>
            @foreach($programs as $program)
                <option value="{{ $program->id }}" {{ old('program_id', $project->program_id ?? '') == $program->id ? 'selected' : '' }}>
                    {{ $program->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div style="flex:1 1 220px; min-width:180px;">
        <label for="facility_id" style="font-weight:500;">Facility</label>
        <select name="facility_id" id="facility_id" class="border rounded p-2 w-full" required>
            <option value="">-- Select Facility --</option>
            @foreach($facilities as $facility)
                <option value="{{ $facility->id }}" {{ old('facility_id', $project->facility_id ?? '') == $facility->id ? 'selected' : '' }}>
                    {{ $facility->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div style="flex:1 1 220px; min-width:180px;">
        <label for="nature_of_project" style="font-weight:500;">Nature of Project</label>
        <select name="nature_of_project" id="nature_of_project" class="border rounded p-2 w-full" required>
            <option value="">-- Select Nature --</option>
            <option value="Research" {{ old('nature_of_project', $project->nature_of_project ?? '') == 'Research' ? 'selected' : '' }}>Research</option>
            <option value="Prototype" {{ old('nature_of_project', $project->nature_of_project ?? '') == 'Prototype' ? 'selected' : '' }}>Prototype</option>
            <option value="Applied Work" {{ old('nature_of_project', $project->nature_of_project ?? '') == 'Applied Work' ? 'selected' : '' }}>Applied Work</option>
        </select>
    </div>
</div>
<div class="form-section" style="margin-top:32px; display: flex; flex-wrap: wrap; gap: 24px;">
    <div style="flex:1 1 320px; min-width:280px;">
        <label for="description" style="font-weight:500;">Description <span style="color:#718096;font-size:0.95em;">(Project overview)</span></label>
        <textarea name="description" id="description" class="border rounded p-2 w-full" rows="3" placeholder="Brief summary of the project">{{ old('description', $project->description ?? '') }}</textarea>
    </div>
    <div style="flex:1 1 220px; min-width:180px;">
        <label for="innovation_focus" style="font-weight:500;">Innovation Focus <span style="color:#718096;font-size:0.95em;">(Select main area)</span></label>
        <select name="innovation_focus" id="innovation_focus" class="border rounded p-2 w-full" required>
            <option value="">-- Select Focus --</option>
            <option value="IoT devices" {{ old('innovation_focus', $project->innovation_focus ?? '') == 'IoT devices' ? 'selected' : '' }}>IoT devices</option>
            <option value="Smart home" {{ old('innovation_focus', $project->innovation_focus ?? '') == 'Smart home' ? 'selected' : '' }}>Smart home</option>
            <option value="Renewable energy" {{ old('innovation_focus', $project->innovation_focus ?? '') == 'Renewable energy' ? 'selected' : '' }}>Renewable energy</option>
            <option value="Automation" {{ old('innovation_focus', $project->innovation_focus ?? '') == 'Automation' ? 'selected' : '' }}>Automation</option>
            <option value="Other" {{ old('innovation_focus', $project->innovation_focus ?? '') == 'Other' ? 'selected' : '' }}>Other</option>
        </select>
    </div>
    <div style="flex:1 1 220px; min-width:180px;">
        <label for="prototype_stage" style="font-weight:500;">Prototype Stage <span style="color:#718096;font-size:0.95em;">(Concept, Prototype, MVP, Market Launch)</span></label>
        <select name="prototype_stage" id="prototype_stage" class="border rounded p-2 w-full" required>
            <option value="">-- Select Stage --</option>
            <option value="Concept" {{ old('prototype_stage', $project->prototype_stage ?? '') == 'Concept' ? 'selected' : '' }}>Concept</option>
            <option value="Prototype" {{ old('prototype_stage', $project->prototype_stage ?? '') == 'Prototype' ? 'selected' : '' }}>Prototype</option>
            <option value="MVP" {{ old('prototype_stage', $project->prototype_stage ?? '') == 'MVP' ? 'selected' : '' }}>MVP</option>
            <option value="Market Launch" {{ old('prototype_stage', $project->prototype_stage ?? '') == 'Market Launch' ? 'selected' : '' }}>Market Launch</option>
        </select>
    </div>
    <div style="flex:1 1 220px; min-width:180px;">
        <label for="testing_requirements" style="font-weight:500;">Testing Requirements <span style="color:#718096;font-size:0.95em;">(Compliance and performance checks)</span></label>
        <select name="testing_requirements" id="testing_requirements" class="border rounded p-2 w-full" required>
            <option value="">-- Select Requirement --</option>
            <option value="Compliance" {{ old('testing_requirements', $project->testing_requirements ?? '') == 'Compliance' ? 'selected' : '' }}>Compliance</option>
            <option value="Performance" {{ old('testing_requirements', $project->testing_requirements ?? '') == 'Performance' ? 'selected' : '' }}>Performance</option>
            <option value="Safety" {{ old('testing_requirements', $project->testing_requirements ?? '') == 'Safety' ? 'selected' : '' }}>Safety</option>
            <option value="Other" {{ old('testing_requirements', $project->testing_requirements ?? '') == 'Other' ? 'selected' : '' }}>Other</option>
        </select>
    </div>
    <div style="flex:1 1 320px; min-width:280px;">
        <label for="commercialization_plan" style="font-weight:500;">Commercialization Plan <span style="color:#718096;font-size:0.95em;">(Path to market adoption)</span></label>
        <textarea name="commercialization_plan" id="commercialization_plan" class="border rounded p-2 w-full" rows="2" placeholder="Describe how the project will reach the market">{{ old('commercialization_plan', $project->commercialization_plan ?? '') }}</textarea>
    </div>
</div>
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ old('title', $project->title ?? '') }}" class="border rounded p-1 w-full" required>
    </div>
    <div>
        <label for="program_id">Program</label>
        <select name="program_id" id="program_id" class="border rounded p-1 w-full" required>
            <option value="">-- Select Program --</option>
            @foreach($programs as $program)
                <option value="{{ $program->id }}" {{ old('program_id', $project->program_id ?? '') == $program->id ? 'selected' : '' }}>
                    {{ $program->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="facility_id">Facility</label>
        <select name="facility_id" id="facility_id" class="border rounded p-1 w-full" required>
            <option value="">-- Select Facility --</option>
            @foreach($facilities as $facility)
                <option value="{{ $facility->id }}" {{ old('facility_id', $project->facility_id ?? '') == $facility->id ? 'selected' : '' }}>
                    {{ $facility->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="nature_of_project">Nature of Project</label>
        <select name="nature_of_project" id="nature_of_project" class="border rounded p-1 w-full" required>
            <option value="">-- Select Nature --</option>
            <option value="Research" {{ old('nature_of_project', $project->nature_of_project ?? '') == 'Research' ? 'selected' : '' }}>Research</option>
            <option value="Prototype" {{ old('nature_of_project', $project->nature_of_project ?? '') == 'Prototype' ? 'selected' : '' }}>Prototype</option>
            <option value="Applied Work" {{ old('nature_of_project', $project->nature_of_project ?? '') == 'Applied Work' ? 'selected' : '' }}>Applied Work</option>
        </select>
    </div>
    <div>
        <label for="description">Description <span style="color:#718096;font-size:0.95em;">(Project overview)</span></label>
        <textarea name="description" id="description" class="border rounded p-1 w-full" rows="3" placeholder="Brief summary of the project">{{ old('description', $project->description ?? '') }}</textarea>
    </div>
    <div>
        <label for="innovation_focus">Innovation Focus <span style="color:#718096;font-size:0.95em;">(Select main area)</span></label>
        <select name="innovation_focus" id="innovation_focus" class="border rounded p-1 w-full" required>
            <option value="">-- Select Focus --</option>
            <option value="IoT devices" {{ old('innovation_focus', $project->innovation_focus ?? '') == 'IoT devices' ? 'selected' : '' }}>IoT devices</option>
            <option value="Smart home" {{ old('innovation_focus', $project->innovation_focus ?? '') == 'Smart home' ? 'selected' : '' }}>Smart home</option>
            <option value="Renewable energy" {{ old('innovation_focus', $project->innovation_focus ?? '') == 'Renewable energy' ? 'selected' : '' }}>Renewable energy</option>
            <option value="Automation" {{ old('innovation_focus', $project->innovation_focus ?? '') == 'Automation' ? 'selected' : '' }}>Automation</option>
            <option value="Other" {{ old('innovation_focus', $project->innovation_focus ?? '') == 'Other' ? 'selected' : '' }}>Other</option>
        </select>
    </div>
    <div>
        <label for="prototype_stage">Prototype Stage <span style="color:#718096;font-size:0.95em;">(Concept, Prototype, MVP, Market Launch)</span></label>
        <select name="prototype_stage" id="prototype_stage" class="border rounded p-1 w-full" required>
            <option value="">-- Select Stage --</option>
            <option value="Concept" {{ old('prototype_stage', $project->prototype_stage ?? '') == 'Concept' ? 'selected' : '' }}>Concept</option>
            <option value="Prototype" {{ old('prototype_stage', $project->prototype_stage ?? '') == 'Prototype' ? 'selected' : '' }}>Prototype</option>
            <option value="MVP" {{ old('prototype_stage', $project->prototype_stage ?? '') == 'MVP' ? 'selected' : '' }}>MVP</option>
            <option value="Market Launch" {{ old('prototype_stage', $project->prototype_stage ?? '') == 'Market Launch' ? 'selected' : '' }}>Market Launch</option>
        </select>
    </div>
    <div>
        <label for="testing_requirements">Testing Requirements <span style="color:#718096;font-size:0.95em;">(Compliance and performance checks)</span></label>
        <select name="testing_requirements" id="testing_requirements" class="border rounded p-1 w-full" required>
            <option value="">-- Select Requirement --</option>
            <option value="Compliance" {{ old('testing_requirements', $project->testing_requirements ?? '') == 'Compliance' ? 'selected' : '' }}>Compliance</option>
            <option value="Performance" {{ old('testing_requirements', $project->testing_requirements ?? '') == 'Performance' ? 'selected' : '' }}>Performance</option>
            <option value="Safety" {{ old('testing_requirements', $project->testing_requirements ?? '') == 'Safety' ? 'selected' : '' }}>Safety</option>
            <option value="Other" {{ old('testing_requirements', $project->testing_requirements ?? '') == 'Other' ? 'selected' : '' }}>Other</option>
        </select>
    </div>
    <div>
        <label for="commercialization_plan">Commercialization Plan <span style="color:#718096;font-size:0.95em;">(Path to market adoption)</span></label>
        <textarea name="commercialization_plan" id="commercialization_plan" class="border rounded p-1 w-full" rows="2" placeholder="Describe how the project will reach the market">{{ old('commercialization_plan', $project->commercialization_plan ?? '') }}</textarea>
    </div>
</div>

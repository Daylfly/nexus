<?php

namespace App\Http\Controllers;

use App\DTOs\ServiceData;
use App\DTOs\UpdateServiceData;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();
        return view('services.index', compact('services'));
    }

    public function show(Service $service)
    {
        return view('services.show', compact('service'));
    }

    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));
    }

    public function create()
    {
        return view('services.create');
    }

    public function store(StoreServiceRequest $request)
    {
        $dto = ServiceData::fromRequest($request);
        $imagePath = $dto->image_path->store('services', 'public');

        Service::create([
            'title' => $dto->title,
            'description' => $dto->description,
            'price' => $dto->price,
            'image_path' => $imagePath,
        ]);

        return redirect()->route('service.create')->with('success', 'Услуга создана');
    }

    public function update(UpdateServiceRequest $request, Service $service)
    {
        $dto = updateServiceData::fromRequest($request, $service);

        $data = [
            'title' => $dto->title,
            'description' => $dto->description,
            'price' => $dto->price,
        ];
        if ($dto->image_path) {
            if ($service->image_path && Storage::disk('public')->exists($service->image_path)) {
                Storage::disk('public')->delete($dto->image_path);
            }
            $data['image_path'] = $dto->image_path->store('service', 'public');
    }
        $service->update($data);
        return redirect()
            ->route('service.index')
            ->with('success', 'Данные успешно обновлены');    }
    public function destroy(Service $service) {
        if ($service->image_path && Storage::disk('public')->exists($service->image_path)) {
            Storage::disk('public')->delete($service->image_path);
        }
        $service->delete();
        return redirect()->route('service.index')->with('success', 'Услуга успешно удалена!');
    }
}

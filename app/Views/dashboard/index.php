<?= $this->extend('layouts/base') ?>

<?= $this->section('content') ?>

<div class="page-header">
  <div>
    <h2>Tableau de bord</h2>
    <div class="breadcrumb">Accueil / <span>Tableau de bord</span></div>
  </div>
  <button class="btn btn-primary btn-sm" type="button">
    <svg viewBox="0 0 24 24"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
    Exporter
  </button>
</div>

<div class="kpi-grid">
  <div class="kpi-card">
    <div class="kpi-header">
      <div class="kpi-label">Utilisateurs actifs</div>
      <div class="kpi-icon bg-blue">
        <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
      </div>
    </div>
    <div class="kpi-value">—</div>
    <div class="kpi-delta up">Données à venir</div>
  </div>

  <div class="kpi-card">
    <div class="kpi-header">
      <div class="kpi-label">Notes saisies</div>
      <div class="kpi-icon bg-green">
        <svg viewBox="0 0 24 24"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
      </div>
    </div>
    <div class="kpi-value">—</div>
    <div class="kpi-delta up">Données à venir</div>
  </div>

  <div class="kpi-card">
    <div class="kpi-header">
      <div class="kpi-label">Étudiants</div>
      <div class="kpi-icon bg-amber">
        <svg viewBox="0 0 24 24"><path d="M10.29 3.86 1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
      </div>
    </div>
    <div class="kpi-value">—</div>
    <div class="kpi-delta down">Données à venir</div>
  </div>

  <div class="kpi-card">
    <div class="kpi-header">
      <div class="kpi-label">État</div>
      <div class="kpi-icon bg-green">
        <svg viewBox="0 0 24 24"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
      </div>
    </div>
    <div class="kpi-value">OK</div>
    <div class="kpi-delta up">Authentifié</div>
  </div>
</div>

<?= $this->endSection() ?>
